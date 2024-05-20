<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     
    public function run(): void
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Blogger']);

        Permission::create(['name' => 'header_admin'])->assignRole($role1);
        Permission::create(['name' => 'añadir_paciente_admin'])->assignRole($role1);
        Permission::create(['name' => 'añadir_receta_admin'])->assignRole($role1);
        Permission::create(['name' => 'añadir_historial_admin'])->assignRole($role1);
        Permission::create(['name' => 'añadir_datos_paciente_admin'])->assignRole($role1);

        Permission::create(['name' => 'guardar_paciente']);->assignRole($role1);
        Permission::create(['name' => 'guardar_receta']);->assignRole($role1);
        Permission::create(['name' => 'mostrarPacientes']);->assignRole($role1);
        Permission::create(['name' => 'paciente.update']);->assignRole($role1);
        Permission::create(['name' => 'paciente.buscar']);->assignRole($role1);
    }*/
}