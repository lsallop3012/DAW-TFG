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
        // Creación de la tabla que relaciona las tablas tableros e imágenes
        Schema::create('tableros_imagenes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tablero_id')->constrained('tableros');
            $table->foreignId('imagen_id')->constrained('imagenes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tableros_imagenes');
    }
};
