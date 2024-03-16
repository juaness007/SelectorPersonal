<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JobPositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void 
    {
        $data = [
        ['ocupation_id'=> 1,'name' => 'Desarrollador Web' , 'description' => 'Encargado de desarrollar aplicaciones web y sitios web.'],
        ['ocupation_id'=> 1,'name' => 'Diseñador Gráfico' , 'description' => 'Encargado de crear elementos visuales para medios impresos y digitales.'],
        ['ocupation_id'=> 1,'name' => 'Especialista en Marketing Digital', 'description' => 'Encargado de planificar y ejecutar estrategias de marketing en línea.'],
        
        ];
        DB::table('job_positions')->insert($data);
    }
}

