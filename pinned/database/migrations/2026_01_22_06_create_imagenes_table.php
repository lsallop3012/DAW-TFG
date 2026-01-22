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
        // Creación de la tabla imágenes
        Schema::create('imagenes', function (Blueprint $table) {
            $table->id();
            $table->string('url')->unique();
            $table->string('nombre');
            $table->text('descripcion')->nullable();
            $table->date('fecha_subida')->unique();
            $table->foreignId('user_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('imagenes');
    }
};
