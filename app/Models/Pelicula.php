<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    protected $table = 'peliculas';

    protected $fillable = [
        'titulo', 'sinopsis', 'director',
        'anio_estreno', 'duracion', 'pais', 'imagen_portada'
    ];

    public function publicaciones() {
        return $this->hasMany(Publicacion::class);
    }
}
