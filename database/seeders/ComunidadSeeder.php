<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComunidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('comunidad')->insert([
            [
                'parroquia_id' => 1,
                'nombre' => 'Parroquia San Pablo',
                'direccion' => 'Parroquia San Pablo'
            ],
            [
                'parroquia_id' => 1,
                'nombre' => 'Comunidad de Santa Cruz',
                'direccion' => 'Comunidad de Santa Cruz'
            ],
            [
                'parroquia_id' => 1,
                'nombre' => 'Comunidad de San Isidro',
                'direccion' => 'Comunidad de San Isidro'
            ],
            [
                'parroquia_id' => 1,
                'nombre' => 'Comunidad de La Cuesta',
                'direccion' => 'Comunidad de La Cuesta'
            ],
            [
                'parroquia_id' => 1,
                'nombre' => 'Comunidad de Santa Rosa',
                'direccion' => 'Comunidad de Santa Rosa'
            ],
        ]);
    }
}
