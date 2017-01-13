<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Hash;
use Shinobi;
use Caffeinated\Shinobi\Models\Role;

class UsersController extends Controller
{

    public function __construct(){
        
        $this->middleware('auth');
    }

    /**
     * Despliega la lista de usuarios.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        if(!Shinobi::can('user.show'))
            abort('404'); 	

        $columnsSelect = [

            'users.id',
            'users.email',
            'users.name',
            'users.active',
            'roles.name as role_name',
            'roles.id as role'
        ];

    	$users = User::orderBy('users.id','decs')
                 ->join('role_user', 'role_user.user_id', '=', 'users.id')
                 ->join('roles', 'roles.id', '=', 'role_user.role_id')
                 ->select($columnsSelect)
                 ->where('users.id', '!=', 1)
                 ->get();

        $roles = Role::get(); 
    	return view('users.user_log')->with(compact('users', 'roles'));	
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\User $users
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, User $user)
    {   
        if(!Shinobi::can('user.edit'))
            abort('404');   

        $this->validate($request, [
            'name' => 'max:255',
            'password' => 'min:6|confirmed',
            'role' => 'exists:roles,id'
        ]);

        $user->name = $request->name;
        $user->active = $request->active;

        if(isset($request->password) && !empty($request->password))
            $user->password = bcrypt($request->password);

        if(isset($request->role) && !empty($request->role))
            $user->syncRoles([$request->role]);

        $user->save();

        return "Usuario modificado.";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\User\ $user;
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if(!Shinobi::can('user.delete'))
            abort('404');   

        $user->delete();  
        return "Usuario borrado.";
    }

    /**
     * Change password.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function changePassword(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'actual_password' => 'required',
            'password' => 'required|min:6|confirmed',
        ]);

        $user = $request->user();

        if($user->email !== $request->email)
            return Response()->json([
                'email' => 'El email no coincide',
            ], 422);

        if( !Hash::check($request->actual_password, $user->password) ) 
            return Response()->json([
                'password' => 'La contraseña no coincide',
            ], 422);

        $user->password = bcrypt($request->password);
        $user->save();

        return "contraseña cambiada exitosamente."; 
    }


}
