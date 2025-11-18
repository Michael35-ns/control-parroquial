<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InventarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                DB::table('inventarios')->insert([
            [
                'espacio_id' => 1,
                'nombre' => 'Sillas de madera',
                'descripcion' => 'Juego de 10 sillas',
                'cantidad' => 10,
                'estado_item_id' => 1,
            ],
            [
                'espacio_id' => 2,
                'nombre' => 'Micrófono',
                'descripcion' => 'Micrófono de altar',
                'cantidad' => 1,
                'estado_item_id' => 2,
            ],
        ]);
    }
}
