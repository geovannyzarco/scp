<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    use HasFactory;

    protected $table = 'permisos'; // Nombre de la tabla

    protected $fillable = [
        'oni',
        'id_tipo_permiso',
        'fecha_solicitud',
        'desde',
        'hasta',
        'motivo',
        'adjunto',
        'id_estado',
        'observaciones',
    ];

    /**
     * Relación con el modelo TipoPermiso (tabla tipo_permisos).
     */
    public function tipoPermiso()
    {
        return $this->belongsTo(TipoPermiso::class, 'id_tipo_permiso');
    }

    /**
     * Relación con el modelo Estado (tabla estados).
     */
    public function estado()
    {
        return $this->belongsTo(Estado::class, 'id_estado');
    }
}
