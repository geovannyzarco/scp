<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Grupo;

class GrupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Grupo::insert([
            ['nombre' => 'GRUPO A', 'limite_permisos' => 3],
            ['nombre' => 'GRUPO B', 'limite_permisos' => 3],
            ['nombre' => 'GRUPO C', 'limite_permisos' => 3],
            ['nombre' => 'GRUPO D', 'limite_permisos' => 3],
            ['nombre' => 'ADMINISTRACION', 'limite_permisos' => 3],
            ['nombre' => 'TECNICOS', 'limite_permisos' => 3],
        ]);
    }
}
