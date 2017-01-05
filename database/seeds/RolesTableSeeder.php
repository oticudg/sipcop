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
       ]);

       $role = new Role();

       $role->name = "Prueba";
       $role->slug = "administrador";
       $role->description = "sdfsdfsdfsdfsdf";
       $role->save();

       $role->syncPermissions([1,2,3,4]);
       $role->save();

    }
}
