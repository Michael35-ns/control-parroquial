<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoEspacioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipos_espacios')->insert([
            ['nombre' => 'Casa Cural'],
            ['nombre' => 'Salón'],
            ['nombre' => 'Templo'],
        ]);
    }
}
