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
    Schema::create('publicaciones', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('user_id');
        $table->unsignedBigInteger('categoria_id');
        $table->unsignedBigInteger('pelicula_id')->nullable();
        $table->string('titulo');
        $table->text('resumen')->nullable();
        $table->text('contenido');
        $table->date('fecha_creacion')->nullable();
        $table->date('fecha_publicacion')->nullable();
        $table->boolean('estado_publicacion')->default(false);
        $table->string('imagen_portada')->nullable();
        $table->string('tipo_publicacion');
        $table->timestamps();

        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publicacions');
    }
};
