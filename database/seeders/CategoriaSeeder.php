<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categoria::insert([
            ['nombre'=>'Administrativo', 'h_personales'=>40],
            ['nombre'=>'Operativo', 'h_personales'=>60],
        ]);
    }
}
