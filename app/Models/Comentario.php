<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $table = 'comentarios';

    protected $fillable = [
        'user_id', 'publicacion_id', 'contenido',
        'fecha_comentario', 'estado_comentario'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
    public function publicacion() {
        return $this->belongsTo(Publicacion::class);
    }
}