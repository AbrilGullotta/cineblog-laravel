@extends('layouts.app')

@section('title', $publicacion->titulo)

@section('content')

<section class="post-section py-5">
    <div class="container post-container">

        <div class="mb-4">
            <p class="texto-amarillo text-uppercase fw-semibold mb-2">{{ $publicacion->tipo_publicacion }}</p>
            <h1 class="fw-bold">{{ $publicacion->titulo }}</h1>
        </div>

        <div class="row g-4">

            <div class="col-lg-4">
               @php
    $carpeta = in_array($publicacion->tipo_publicacion, ['noticia']) ? 'noticias' : 'estrenos';
@endphp
<img src="{{ asset('img/' . $carpeta . '/' . $publicacion->imagen_portada) }}" class="img-fluid post-poster" alt="{{ $publicacion->titulo }}">
            </div>

            <div class="col-lg-8">

                <div class="d-flex align-items-center mb-4">
                    @if($publicacion->user->foto_perfil)
                        <img src="{{ asset('img/usuarios/' . $publicacion->user->foto_perfil) }}" class="foto-perfil me-3" alt="{{ $publicacion->user->name }}">
                    @endif
                    <div>
                        <p class="mb-0 fw-bold">{{ $publicacion->user->name }}</p>
                        <p class="mb-0 texto-secundario">{{ \Carbon\Carbon::parse($publicacion->fecha_publicacion)->format('d \d\e F \d\e Y') }}</p>
                    </div>
                </div>

                @if($publicacion->etiquetas->count())
                    <div class="mb-3">
                        @foreach($publicacion->etiquetas as $etiqueta)
                            <span class="badge bg-secondary me-1">{{ $etiqueta->nombre_etiqueta }}</span>
                        @endforeach
                    </div>
                @endif

                <div class="post-content">
                    {!! nl2br(e($publicacion->contenido)) !!}
                </div>

            </div>
        </div>

        <div class="comentarios mt-5">

            <h2 class="mb-4">Comentarios ({{ $publicacion->comentarios->count() }})</h2>

            @forelse($publicacion->comentarios as $comentario)
                <div class="comentario-item mb-4">
                    <div class="d-flex align-items-center mb-2">
                        @if($comentario->user->foto_perfil)
                            <img src="{{ asset('img/usuarios/' . $comentario->user->foto_perfil) }}" class="foto-perfil me-2" alt="{{ $comentario->user->name }}">
                        @endif
                        <strong>{{ $comentario->user->name }}</strong>
                        <span class="texto-secundario ms-2">{{ \Carbon\Carbon::parse($comentario->fecha_comentario)->format('d/m/Y') }}</span>

                        @auth
                            @if(Auth::id() == $comentario->user_id)
                                <form action="{{ route('comentarios.destroy', $comentario->id) }}" method="POST" class="ms-auto">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                </form>
                            @endif
                        @endauth
                    </div>
                    <p class="texto-secundario mb-0">{{ $comentario->contenido }}</p>
                </div>
            @empty
                <p class="texto-secundario">No hay comentarios aún. ¡Sé el primero!</p>
            @endforelse

            @auth
                <div class="mt-4">
                    <h3 class="mb-3">Dejá tu comentario</h3>

                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <form action="{{ route('comentarios.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="publicacion_id" value="{{ $publicacion->id }}">
                        <textarea class="form-control mb-3" name="contenido" rows="3"
                            placeholder="Escribí tu comentario">{{ old('contenido') }}</textarea>
                        @error('contenido')
                            <div class="text-danger mb-2">{{ $message }}</div>
                        @enderror
                        <button type="submit" class="btn btn-amarillo">Publicar</button>
                    </form>
                </div>
            @else
                <div class="mt-4">
                    <p class="texto-secundario">
                        <a href="{{ route('login') }}">Iniciá sesión</a> para dejar un comentario.
                    </p>
                </div>
            @endauth

        </div>

    </div>
</section>

@endsection