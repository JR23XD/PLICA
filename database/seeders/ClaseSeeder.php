<?php

namespace Database\Seeders;

use App\Models\Clase;
use Illuminate\Database\Seeder;

class ClaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Clase::create([
            'id'=>1,
            'nom'=>'Guitarra',
        ]);
        Clase::create([
            'id'=>2,
            'nom'=>'Violin',
        ]);
        Clase::create([
            'id'=>3,
            'nom'=>'Saxofon',
        ]);
        Clase::create([
            'id'=>4,
            'nom'=>'Bajo',
        ]);
        Clase::create([
            'id'=>5,
            'nom'=>'Canto',
        ]);
        Clase::create([
            'id'=>6,
            'nom'=>'Teclado',
        ]);
        Clase::create([
            'id'=>7,
            'nom'=>'Bateria',
        ]);
    }
}
