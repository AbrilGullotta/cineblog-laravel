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
    Schema::create('etiqueta_publicacion', function (Blueprint $table) {
        $table->foreignId('publicacion_id')->constrained('publicaciones')->onDelete('cascade');
        $table->foreignId('etiqueta_id')->constrained('etiquetas')->onDelete('cascade');
        $table->primary(['publicacion_id', 'etiqueta_id']);
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etiqueta_publicacion');
    }
};
