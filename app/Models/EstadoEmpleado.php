<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoEmpleado extends Model
{
    use HasFactory;

    protected $table = 'estados_empleados'; // Nombre de la tabla (opcional si sigue las convenciones)

    protected $fillable = [
        'nombre', // Campo asignable
    ];
}
