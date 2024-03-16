<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EconomicActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['code' => '001', 'name' => 'Agricultura, ganadería, caza y silvicultura'],
            ['code' => '002', 'name' => 'Pesca y acuicultura'],
            ['code' => '003', 'name' => 'Explotación de minas y canteras'],
            // Agrega más datos según sea necesario
        ];

        DB::table('economic_activities')->insert($data);
    }
}
