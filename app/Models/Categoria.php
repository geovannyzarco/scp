<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $table = 'categorias'; // Nombre de la tabla

    protected $fillable = [
        'nombre', // Nombre de la categoría
        'h_personales', // Horas personales asignadas
    ];
}
