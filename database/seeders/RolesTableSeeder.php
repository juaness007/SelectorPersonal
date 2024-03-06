<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1=new Role;
        $role1->role_name ='ADMINISTRADOR';
        $role1->description ='ADMINISTRADOR DE USUARIOS';
        $role1->save();


        $role2=new Role;
        $role2->role_name ='INSTRUCTOR';
        $role2->description ='USUARIO INSTRUCTOR- FORMADOR';
        $role2->save();

        $role3=new Role;
        $role3->role_name ='RECLUTADOR';
        $role3->description ='USUARIO RECLUTADOR DE TALENTO HUMANO ';
        $role3->save();

        $role4=new Role;
        $role4->role_name ='CANDIDATO';
        $role4->description ='USUARIO CANDIDATO A OCUPAR UNA VACANTE LABORAL';
        $role4->save();

    }
}
