<?php

namespace Database\Seeders;
use App\Models\Horario;
use Illuminate\Database\Seeder;

class HorarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Horario::create([
            'id'=>1,
            'tip'=>'Grupo',
            'fhi'=>'11/01/2021 12:00 PM',
            'fhf'=>'11/01/2021 01:00 PM',
            'mod'=>'Linea',
        ]);
        Horario::create([
            'id'=>2,
            'tip'=>'Individual',
            'fhi'=>'11/02/2021 12:00 PM',
            'fhf'=>'11/02/2021 01:00 PM',
            'mod'=>'Local',
        ]);
        Horario::create([
            'id'=>3,
            'tip'=>'Grupo',
            'fhi'=>'11/03/2021 12:00 PM',
            'fhf'=>'11/03/2021 01:00 PM',
            'mod'=>'Domicilio',
        ]);
        Horario::create([
            'id'=>4,
            'tip'=>'Individual',
            'fhi'=>'11/04/2021 12:00 PM',
            'fhf'=>'11/04/2021 01:00 PM',
            'mod'=>'Linea',
        ]);
        Horario::create([
            'id'=>5,
            'tip'=>'Grupo',
            'fhi'=>'11/05/2021 12:00 PM',
            'fhf'=>'11/05/2021 01:00 PM',
            'mod'=>'Local',
        ]);
        Horario::create([
            'id'=>6,
            'tip'=>'Individual',
            'fhi'=>'11/06/2021 12:00 PM',
            'fhf'=>'11/06/2021 01:00 PM',
            'mod'=>'Domicilio',
        ]);
    }
}
