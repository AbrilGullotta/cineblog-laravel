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
    Schema::create('configuracion', function (Blueprint $table) {
        $table->id();
        $table->string('nombre_blog');
        $table->text('descripcion_blog');
        $table->string('logo')->nullable();
        $table->string('mail_contacto');
        $table->boolean('estado_blog')->default(true);
        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('configuracions');
    }
};
