<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compensado extends Model
{
    use HasFactory;

    protected $table = 'compensados'; // Opcional si sigue las convenciones

    protected $fillable = [
        'oni',
        'fecha_solicitud',
        'justificacion',
        'desde',
        'hasta',
        'adjunto',
        'observaciones',
        'id_estado',
    ];
}
