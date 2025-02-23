<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoPermisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipo_permisos')->insert([
            ['nombre' => 'PERMISO PERSONAL'],
            ['nombre' => 'POR TIEMPO COMPENSATORIO'],
            ['nombre' => 'CUMPLEAÑOS'],
            ['nombre' => 'LICENCIA DE 8 DIAS POR MATERNIDAD'],
            ['nombre' => 'DELEGACIONES DEPORTIVAS, CULTURAL O CIENTIFICAS'],
            ['nombre' => 'TRATAMIENTO DE ENFERMEDAD EN EL EXTRANJERO'],
            ['nombre' => 'CONSULTA MEDICA'],
            ['nombre' => 'ENFERMEDAD O DUELO'],
            ['nombre' => 'ESTUDIOS/HORAS SOCIALES'],
            ['nombre' => 'DILIGENCIAS JUDICIALES/EXTRAJUDICIALES'],
            ['nombre' => 'FALTA DE MARCACION'],
            ['nombre' => 'LICENCIA POR ENFERMEDAD SIN INCAPACIDAD'],
            ['nombre' => 'MISIÓN OFICIAL'],
            ['nombre' => 'PATERNIDAD'],
            ['nombre' => 'POR LACTANCIA'],
            ['nombre' => 'POR IMPARTIR CLASES'],
        ]);
    }
}
