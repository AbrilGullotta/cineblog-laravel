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
    Schema::create('categorias', function (Blueprint $table) {
        $table->id();
        $table->string('nombre_categoria');
        $table->text('descripcion')->nullable();
        $table->timestamps();
    });
    Schema::table('publicaciones', function (Blueprint $table) {
    $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade');
    $table->foreign('pelicula_id')->references('id')->on('peliculas')->onDelete('set null');
});
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categorias');
    }
};
