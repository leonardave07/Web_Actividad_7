<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use app\Models\Usuario;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usuarios')->insert([
            'firstName' => 'Admon',
            'lastName' => 'Tecmilenio',
            'email' => 'admon@robotics.com',
            'password' => 'Adm@2022',
            'userType' => 'Administrativo',
            'idGroup' => 1
        ]);

        DB::table('usuarios')->insert([
            'firstName' => 'Tecmilenio',
            'lastName' => 'Tecmilenio',
            'email' => 'tecmilenio@robotics.com',
            'password' => 'Adm@2022',
            'userType' => 'Profesor',
            'idGroup' => 1
        ]);

        DB::table('usuarios')->insert([
            'firstName' => 'Estudiante',
            'lastName' => 'Tecmilenio',
            'email' => 'student@robotics.com',
            'password' => 'Adm@2022',
            'userType' => 'Estudiante',
            'idGroup' => 1
        ]);
    }
}
