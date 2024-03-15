<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OcupationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['code' => 'OCUP001', 'name' => 'Desarrollador de Software'],
            ['code' => 'OCUP002', 'name' => 'Diseñador Gráfico'],
            ['code' => 'OCUP003', 'name' => 'Ingeniero Civil'],
   
            ];
            DB::table('ocupations')->insert($data);
   }
}

