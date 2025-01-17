<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;

    protected $table = 'estados'; // Nombre de la tabla (opcional si sigue la convención)

    protected $fillable = [
        'nombre', // Campos que se pueden asignar masivamente
    ];
}
