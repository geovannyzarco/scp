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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id(); // Clave primaria
            $table->string('oni', 15)->unique(); // Código de empleado único
            $table->string('nombre', 200); // Nombre del empleado
            $table->unsignedBigInteger('id_unidad'); // FK a la tabla unidades
            $table->unsignedBigInteger('id_categoria'); // FK a la tabla categorias
            $table->unsignedBigInteger('id_grupo'); // FK a la tabla grupos
            $table->unsignedBigInteger('id_estado_empleado'); // FK a la tabla estado_empleados

            // Definición de relaciones
            $table->foreign('id_unidad')->references('id')->on('unidades')->onDelete('cascade');
            $table->foreign('id_categoria')->references('id')->on('categorias')->onDelete('cascade');
            $table->foreign('id_grupo')->references('id')->on('grupos')->onDelete('cascade');
            $table->foreign('id_estado_empleado')->references('id')->on('estado_empleados')->onDelete('cascade');

            $table->timestamps(); // Campos 'created_at' y 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
