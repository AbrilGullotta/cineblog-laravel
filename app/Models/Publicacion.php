<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    protected $table = 'publicaciones';

    protected $fillable = [
        'user_id', 'categoria_id', 'pelicula_id', 'titulo', 'resumen',
        'contenido', 'fecha_creacion', 'fecha_publicacion',
        'estado_publicacion', 'imagen_portada', 'tipo_publicacion'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
    public function categoria() {
        return $this->belongsTo(Categoria::class);
    }
    public function pelicula() {
        return $this->belongsTo(Pelicula::class);
    }
    public function etiquetas() {
        return $this->belongsToMany(Etiqueta::class, 'etiqueta_publicacion');
    }
    public function comentarios() {
        return $this->hasMany(Comentario::class);
    }
    public function puntuaciones() {
        return $this->hasMany(Puntuacion::class);
    }
    public function likes() {
        return $this->hasMany(LikePublicacion::class);
    }
}