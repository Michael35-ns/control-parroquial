<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'rol_id' => 1,
                'parroquia_id' => 1,
                'comunidad_id' => 1,
                'name' => 'Cristopher Núñez Vargas',
                'email' => 'crisnuva1427@gmail.com',
                'password' => Hash::make('password123'),
            ],
        ]);
    }
}
