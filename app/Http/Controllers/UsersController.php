<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Shinobi;
use Caffeinated\Shinobi\Models\Role;

class UsersController extends Controller
{
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
                 ->get();

        $roles = Role::get(); 
    	return view('users.user_log')->with(compact('users', 'roles'));	
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Models\Expediente\Expediente $Expediente
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
     * @param  App\Models\Expediente\Expediente $expediente
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if(!Shinobi::can('user.delete'))
            abort('404');   

        $user->delete();  
        return "Usuario borrado.";
    }

}
