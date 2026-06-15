<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LikePublicacion extends Model
{
    protected $table = 'like_publicaciones';

    protected $fillable = [
        'user_id', 'publicacion_id', 'fecha_like'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
    public function publicacion() {
        return $this->belongsTo(Publicacion::class);
    }
}