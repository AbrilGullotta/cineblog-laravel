@extends('layouts.app')

@section('title', 'Mis favoritas - Cineblog')

@section('content')

<section class="perfil-header py-5">
    <div class="container">
        <h1 class="fw-bold mb-2">Mis favoritas</h1>
        <p class="texto-secundario mb-0">
            Accedé a tus publicaciones o películas guardadas para volver a verlas cuando quieras.
        </p>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row g-4">

            @forelse($likes as $like)
                <div class="col-md-4">
                    <div class="card card-estreno h-100">
                        @if($like->publicacion->imagen_portada)
                            @php
                                $carpeta = in_array($like->publicacion->tipo_publicacion, ['noticia', 'evento']) ? 'noticias' : 'estrenos';
                            @endphp
                            <img src="{{ asset('img/' . $carpeta . '/' . $like->publicacion->imagen_portada) }}"
                                class="card-img-top" alt="{{ $like->publicacion->titulo }}">
                        @endif
                        <div class="card-body p-4">
                            <h5 class="fw-bold mb-1">{{ $like->publicacion->titulo }}</h5>
                            <p class="texto-secundario mb-3">{{ $like->publicacion->categoria->nombre_categoria }}</p>
                            <a href="{{ route('publicacion.show', $like->publicacion_id) }}" class="btn btn-amarillo btn-sm">Ver publicación</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="card card-estreno p-4">
                        <p class="texto-secundario mb-0">No tenés publicaciones guardadas todavía.</p>
                    </div>
                </div>
            @endforelse

        </div>
    </div>
</section>

@endsection