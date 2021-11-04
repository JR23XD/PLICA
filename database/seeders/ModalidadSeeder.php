<?php
namespace Database\Seeders;

use App\Models\Modalidad;

use Illuminate\Database\Seeder;


class ModalidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Modalidad::create([
            'id'=>1,
            'nom'=>'Linea',
        ]);
        Modalidad::create([
            'id'=>2,
            'nom'=>'Domicilio',
        ]);
        Modalidad::create([
            'id'=>3,
            'nom'=>'Local',
        ]);
    }
}
