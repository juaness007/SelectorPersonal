<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contract;

class ContractSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Define los contratos y sus descripciones
        $contracts = [
            ['name' => 'Tiempo Completo', 'description' => 'Contrato a tiempo completo, generalmente 40 horas a la semana.'],
            ['name' => 'Medio Tiempo', 'description' => 'Contrato a medio tiempo, generalmente 20 horas a la semana.'],
            ['name' => 'Por Proyecto', 'description' => 'Contrato por proyecto, con una duración específica para la realización de un proyecto o tarea.'],
            // Agrega más contratos si lo deseas
        ];

        // Itera sobre los contratos y crea registros en la base de datos
        foreach ($contracts as $contract) {
            Contract::create([
                'name' => $contract['name'],
                'description' => $contract['description'],
            ]);
        }
    }
}