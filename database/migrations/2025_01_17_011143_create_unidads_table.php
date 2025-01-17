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
        Schema::create('unidades', function (Blueprint $table) {
            $table->id(); // Clave primaria
            $table->string('nombre', 255); // Campo 'nombre' con un límite de 255 caracteres
            $table->timestamps(); // Campos 'created_at' y 'updated_at' (pueden eliminarse si no son necesarios)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unidades');
    }
};
