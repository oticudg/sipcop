<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       //Crea permisos
       DB::table('permissions')->insert([
       		['name' => 'Ver expediente', 'slug' => 'expediente.show', 'description' => 'Permite visualizar expedientes'],
       		['name' => 'Registrar expediente', 'slug' => 'expediente.register', 'description' => 'Permite register un expediente'],
       		['name' => 'Editar expediente', 'slug' => 'expediente.edit', 'description' => 'Permite editar un expediente'],
       		['name' => 'Eliminar expediente', 'slug' => 'expediente.delete', 'description' => 'Permite eliminar un expediente'],
          ['name' => 'Ver usuarios', 'slug' => 'user.show', 'description' => 'Permite visualizar usuarios'],
          ['name' => 'Registrar usuario', 'slug' => 'user.register', 'description' => 'Permite register un usuario'],
          ['name' => 'Editar usuario', 'slug' => 'user.edit', 'description' => 'Permite editar un usuario'],
          ['name' => 'Eliminar usuario', 'slug' => 'user.delete', 'description' => 'Permite eliminar un usuario'],
       ]);

       //Role administrador
       $role = new Role();
       $role->name = "ADMINISTRADOR";
       $role->slug = "administrador";
       $role->description = "Administrador del sistema";
       $role->special = "all-access";
       $role->save();

       //Role Registrador
       $role = new Role();
       $role->name = "REGISTRADOR";
       $role->slug = "registrador";
       $role->description = "Registrador de expedientes en el sistema"; 
       $role->save();

       $role->syncPermissions([1,2,3,4,5,6,7,8]);
       $role->save();

    }
}
