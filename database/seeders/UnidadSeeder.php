<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('unidades')->insert([
            ['nombre' => 'ADMINISTRACION'],
            ['nombre' => 'SALA DALLDE'],
            ['nombre' => 'CCTV'],
            ['nombre' => 'DESIT'],
            ['nombre' => 'SIEP'],
            ['nombre' => 'CCEE'],
        ]);
    }
}
