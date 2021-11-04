<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;


class RoleSeeder extends Seeder
{
    public function run()
    {
        Role::create([
            'id'=>1,
            'nom'=>'Desarrollador',
            'name'=>'desarrollador',
            'desc'=>'Acceso total al sistema',
        ]);
       Role::create([
            'id'=>2,
            'nom'=>'Profesor', 
            'name'=>'profesor',
            'desc'=>'Visualización de datos',
        ])->syncPermissions([6,7,8,9,]);
        Role::create([
            'id'=>3,
            'nom'=>'Alumno', 
            'name'=>'alumno',
            'desc'=>'Visualización de datos',
        ])->syncPermissions([6,7,8,9,]);
        Role::create([
            'id'=>4,
            'nom'=>'Administrador de Usuarios', 
            'name'=>'admin.usuarios',
            'desc'=>'Visualización de toda la información de los usuarios',
        ])->syncPermissions([1,2,3,4]);

    }
}
