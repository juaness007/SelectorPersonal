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
        // Datos de ejemplo para los salarios
        $salariesData = [
            ['name' => '1.500.000-2.000.000', 'description' => 'Tipo 1'],
            ['name' => '2.500.000-3.000.000', 'description' => 'Tipo 2'],
            ['name' => '3.500.000-4.000.000', 'description' => 'Tipo 3'],
            // Agrega más datos si es necesario
        ];

        // Insertar los datos en la tabla 'salaries'
        foreach ($salariesData as $salaryData) {
            Salary::create($salaryData);
        }
    }
}
