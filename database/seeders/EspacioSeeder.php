<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EspacioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('espacios')->insert([
            [
                'comunidad_id' => 1,
                'tipo_espacio_id' => 1,
                'nombre' => 'Casa Cural de la Parroquia',
            ],
            [
                'comunidad_id' => 1,
                'tipo_espacio_id' => 2,
                'nombre' => 'Salón de la Parroquia'
            ],
            [
                'comunidad_id' => 1,
                'tipo_espacio_id' => 3,
                'nombre' => 'Templo de la Parroquia',
            ],
        ]);
    }
}
