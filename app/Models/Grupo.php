<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;

    protected $table = 'grupos'; // Nombre de la tabla

    protected $fillable = [
        'nombre', // Nombre del grupo
        'limite_permisos', // Límite de permisos
    ];
}
