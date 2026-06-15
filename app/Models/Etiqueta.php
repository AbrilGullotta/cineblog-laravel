<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Etiqueta extends Model
{
    protected $table = 'etiquetas';

    protected $fillable = ['nombre_etiqueta'];

    public function publicaciones() {
        return $this->belongsToMany(Publicacion::class, 'etiqueta_publicacion');
    }
}