<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Permission;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    /* ------------ [ USUARIOS ] ------------ */
        Permission::create([
            'id' => 1,
            'nom' => 'Lista de Registros',
            'name' => 'usuario.index',
            'desc' => 'Visualiza los registros'
            ]);
        Permission::create([
            'id' => 2,
            'nom' => 'Crear Nuevo registro',
            'name' => 'usuarios.create',
            'desc' => 'Crea un nuevo registro'
            ]);
        Permission::create([
            'id' => 3,
            'nom' => 'Detalles del registro',
            'name' => 'usuarios.show',
            'desc' => 'Muestra los detalles del registro'
            ]);    
        Permission::create([
            'id' => 4,
            'nom'=>'Actualizar Registro',
            'name' => 'usuarios.edit',
            'desc'=>'Actualiza el registro'
            ]);
        Permission::create([
            'id' => 5,
            'nom'=>'Eliminar Registro',
            'name' => 'usuario.destroy',
            'desc'=>'Elimina el registro'
            ]);
 /* ------------ [ CLASES ] ------------ */
        Permission::create([
            'id' => 6,
            'nom' => 'Lista de Clases',
            'name' => 'clases.index',
            'desc' => 'Visualiza las clases'
            ]);
        Permission::create([
            'id' => 7,
            'nom' => 'Crear Nueva Clase',
            'name' => 'clases.create',
            'desc' => 'Crea una nueva clase'
            ]);
        Permission::create([
            'id' => 8,
            'nom' => 'Detalles de la clase',
            'name' => 'clases.show',
            'desc' => 'Muestra los detalles de la clase'
            ]);    
        Permission::create([
            'id' => 9,
            'nom'=>'Actualizar Clase',
            'name' => 'clases.edit',
            'desc'=>'Actualiza la clase'
            ]);
        Permission::create([
            'id' => 10,
            'nom'=>'Eliminar Clase',
            'name' => 'clases.destroy',
            'desc'=>'Elimina la clase'
            ]);

        /* ------------ [ Facturas ] ------------ */
        Permission::create([
            'id' => 11,
            'nom' => 'Lista de Facturas',
            'name' => 'facturas.index',
            'desc' => 'Visualiza las facturas'
            ]);
        Permission::create([
            'id' => 12,
            'nom' => 'Registrar Nueva Factura',
            'name' => 'facturas.create',
            'desc' => 'Registra una nueva factura'
            ]);
        Permission::create([
            'id' => 13,
            'nom' => 'Detalles de la Factura',
            'name' => 'facturas.show',
            'desc' => 'Muestra los detalles de la factura'
            ]);    
        Permission::create([
            'id' => 14,
            'nom'=>'Actualizar Factura',
            'name' => 'facturas.edit',
            'desc'=>'Actualiza la factura'
            ]);
        Permission::create([
            'id' => 15,
            'nom'=>'Eliminar Factura',
            'name' => 'facturas.destroy',
            'desc'=>'Elimina la factura'
            ]);
            /* ------------ [ PAGOS ] ------------ */
        Permission::create([
            'id' => 16,
            'nom' => 'Lista de Pagos',
            'name' => 'pagos.index',
            'desc' => 'Visualiza los pagos'
            ]);
        Permission::create([
            'id' => 17,
            'nom' => 'Registra un Nuevo Pago',
            'name' => 'pagos.create',
            'desc' => 'Crea una nueva clase'
            ]);
        Permission::create([
            'id' => 18,
            'nom' => 'Detalles del Pago',
            'name' => 'pagos.show',
            'desc' => 'Muestra los detalles del Pago'
            ]);    
        Permission::create([
            'id' => 19,
            'nom'=>'Actualizar Pago',
            'name' => 'pagos.edit',
            'desc'=>'Actualiza el pago'
            ]);
        Permission::create([
            'id' => 20,
            'nom'=>'Eliminar Pago',
            'name' => 'pagos.destroy',
            'desc'=>'Elimina el pago'
            ]);
    }
}