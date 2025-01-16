<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoPermiso extends Model
{
    use HasFactory;
    protected $table = 'tipo_permisos';
    protected $fillable = [
        'nombre',
    ];
}
