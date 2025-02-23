<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class EstadoEmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('estado_empleados')->insert([
            ['nombre' => 'ACTIVO'],
            ['nombre' => 'INACTIVO'],
            ['nombre' => 'SUSPENDIDO'],
            ['nombre' => 'TRASLADADO'],
            ['nombre' => 'RETIRADO'],
        ]);

    }
}
