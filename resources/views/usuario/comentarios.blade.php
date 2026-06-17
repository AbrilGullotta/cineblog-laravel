@extends('layouts.app')

@section('title', 'Mis comentarios - Cineblog')

@section('content')

<section class="perfil-header py-5">
    <div class="container">
        <h1 class="fw-bold mb-2">Mis comentarios</h1>
        <p class="texto-secundario mb-0">
            Consultá el historial de comentarios que realizaste en publicaciones del blog.
        </p>
    </div>
</section>

<section class="py-5">
    <div class="container">

        @forelse($comentarios as $comentario)
            <div class="card card-estreno mb-4">
                <div class="card-body p-4">
                    <h5 class="mb-1">{{ $comentario->publicacion->titulo }}</h5>
                    <p class="texto-secundario mb-2">
                        {{ \Carbon\Carbon::parse($comentario->fecha_comentario)->format('d \d\e F \d\e Y') }}
                    </p>
                    <p class="mb-3">{{ $comentario->contenido }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="{{ route('publicacion.show', $comentario->publicacion_id) }}" class="btn btn-amarillo btn-sm">Ver publicación</a>
                        <form action="{{ route('comentarios.destroy', $comentario->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger"
                                onclick="return confirm('¿Eliminás este comentario?')">Eliminar</button>
                        </form>
                    </div>
                </div>
            </div>
        @empty
            <div class="card card-estreno p-4">
                <p class="texto-secundario mb-0">No realizaste ningún comentario todavía.</p>
            </div>
        @endforelse

    </div>
</section>

@endsection