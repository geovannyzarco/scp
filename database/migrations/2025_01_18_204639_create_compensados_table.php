<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('compensados', function (Blueprint $table) {

            $table->id(); // Clave primaria
            $table->string('oni', 15); // Foreign key hacia la tabla empleados
            $table->date('fecha_solicitud'); // Fecha de solicitud
            $table->text('justificacion'); // Campo para la justificación
            $table->dateTime('desde'); // Inicio del periodo compensado
            $table->dateTime('hasta'); // Fin del periodo compensado
            $table->text('adjunto')->nullable(); // Archivo adjunto (opcional)
            $table->text('observaciones')->nullable(); // Observaciones adicionales (opcional)
            $table->unsignedBigInteger('id_estado'); // Foreign key hacia la tabla estados

            // Relación con la tabla empleados
           // $table->foreign('oni')->references('oni')->on('empleados')->onDelete('cascade');

            // Relación con la tabla estados
            $table->foreign('id_estado')->references('id')->on('estados')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compensados');
    }
};
