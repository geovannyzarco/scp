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
        Schema::create('permisos', function (Blueprint $table) {
            $table->id();
            $table->string('oni', 15); // Foreign key hacia la tabla empleados
            $table->unsignedBigInteger('id_tipo_permiso'); // Foreign key hacia la tabla tipo_permisos
            $table->date('fecha_solicitud'); // Fecha de solicitud del permiso
            $table->dateTime('desde'); // Inicio del permiso
            $table->dateTime('hasta'); // Fin del permiso
            $table->text('motivo'); // Justificación o motivo del permiso
            $table->text('adjunto')->nullable(); // Archivo adjunto (opcional)
            $table->unsignedBigInteger('id_estado'); // Foreign key hacia la tabla estados
            $table->text('observaciones')->nullable(); // Comentarios adicionales (opcional)

            // Relación con la tabla tipo_permisos
            $table->foreign('id_tipo_permiso')->references('id')->on('tipo_permisos')->onDelete('cascade');

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
        Schema::dropIfExists('permisos');
    }
};
