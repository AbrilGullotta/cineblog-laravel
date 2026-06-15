<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';

    protected $fillable = ['nombre_categoria', 'descripcion'];

    public function publicaciones() {
        return $this->hasMany(Publicacion::class);
    }
}