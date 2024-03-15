<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Salary;

class SalarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $salaries = ['1.500.000-2.000.000', '2.500.000-3.000.000', '3.500.000-4.000.000'];

        foreach ($salaries as $salary) {
            Salary::create([
                'salarios' => $salary
            ]);
        }
    }
}

