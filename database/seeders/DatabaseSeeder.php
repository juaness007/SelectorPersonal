<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Database\Seeders\JobPositionSeeder ;
use Illuminate\Database\Seeder;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([RolesTableSeeder::class]);
        $this->call([CountrySeeder::class]);
         $this->call([DepartmentSeeder::class]);
         $this->call([MunicipioSeeder::class]);
         $this->call([OcupationSeeder::class]);
         $this->call([JobPositionSeeder::class]);
         $this->call([SalarySeeder::class]);
         $this->call([ContractSeeder::class]);
         $this->call([EconomicActivitySeeder::class]);
         $this->call([CompanySeeder::class]);
    }
}
