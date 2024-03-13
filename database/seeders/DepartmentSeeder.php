<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void 
    {
        $data = [
        ['name' => 'Atlantico' , 'country_id' => '1'],
        ['name' => 'Bolivar' , 'country_id' => 1],
        ['name' => 'Antioquia' , 'country_id' => 1],
        ['name' => 'Cundinamarca' , 'country_id' => 1],

        ];
        DB::table('departments')->insert($data);
    }
}
