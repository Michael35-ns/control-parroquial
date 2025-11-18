<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ParroquiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('parroquia')->insert([
            [
                'nombre' => 'Parroquia San Pablo',
                'direccion' => 'San Antonio, León Cortés, San Pablo'
            ],
        ]);
    }
}
