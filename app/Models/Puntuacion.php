<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Puntuacion extends Model
{
    protected $table = 'puntuaciones';

    protected $fillable = [
        'user_id', 'publicacion_id', 'puntuacion', 'fecha_puntuacion'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
    public function publicacion() {
        return $this->belongsTo(Publicacion::class);
    }
}