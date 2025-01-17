<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $table = 'empleados'; // Nombre de la tabla

    protected $fillable = [
        'oni',
        'nombre',
        'id_unidad',
        'id_categoria',
        'id_grupo',
        'id_estado_empleado',
    ];

     /**
     * Relación con el modelo Categoria.
     */
    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'id_categoria');
    }

    /**
     * Relación con el modelo Grupo.
     */
    public function grupo()
    {
        return $this->belongsTo(Grupo::class, 'id_grupo');
    }

    /**
     * Relación con el modelo EstadoEmpleado.
     */
    public function estadoEmpleado()
    {
        return $this->belongsTo(EstadoEmpleado::class, 'id_estado_empleado');
    }

}
