<?php

namespace Database\Seeders;

use App\Models\Municipality;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MunicipioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $municipality = [
             ['code' => '1' ,'name' => 'Bogotá' , 'department_id' => 1],
             ['code' => '2' ,'name' => 'Medellin' , 'department_id' => 1],
             ['code' => '3' ,'name' => 'Barranquilla' , 'department_id' => 1],
    
             ];
             DB::table('municipalities')->insert($municipality);
    }
}
