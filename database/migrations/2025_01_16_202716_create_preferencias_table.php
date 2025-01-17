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
        Schema::create('preferencias', function (Blueprint $table) {
            $table->id();
            $table->string('entidad', 255); // Campo de texto para entidad
            $table->string('direccion', 255); // Campo de texto para dirección
            $table->unsignedBigInteger('telefono'); // Campo numérico para teléfono
            $table->string('correo', 255); // Campo de texto para correo
            $table->string('jefe', 255); // Campo de texto para jefe
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('preferencias');
    }
};
