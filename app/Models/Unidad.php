<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    use HasFactory;

    protected $table = 'unidades'; // Nombre de la tabla

    protected $fillable = [
        'nombre', // Campo asignable
    ];
}
