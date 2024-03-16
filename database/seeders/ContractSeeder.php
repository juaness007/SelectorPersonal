<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ContractSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
            $data = [
                ['name' => 'Tiempo Completo', 'description' => 'Contrato a tiempo completo, generalmente 40 horas a la semana.'],
                ['name' => 'Medio Tiempo', 'description' => 'Contrato a medio tiempo, generalmente 20 horas a la semana.'],
                ['name' => 'Por Proyecto', 'description' => 'Contrato por proyecto, con una duración específica para la realización de un proyecto o tarea.'],
                // Agrega más contratos si lo deseas
            ];
            DB::table('contracts')->insert($data);
    }
}