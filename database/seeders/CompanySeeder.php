<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'NIT' => '123456789',
                'name' => 'Empresa Ejemplo',
                'municipality_code' => 1, 
                'economic_activity_code' => 1, 
                'legalRepresentative' => 'Evelio Chaparro',
                'email' => 'empresa@example.com'
            ],
            
        ];

        DB::table('companies')->insert($data);
    }
}

