@extends('layouts.app')

@section('title', 'Cineblog')

@section('content')

<header class="hero d-flex align-items-end">
    <div class="container pb-5">
        <h1 class="display-3 fw-bold">
            Bienvenido a CineBlog
        </h1>
    </div>
</header>

<section class="estrenos">
    <div class="container">
        <h2 class="mb-4">Estrenos</h2>
        <div class="row g-3">
            @forelse($publicaciones->where('tipo_publicacion', 'estreno') as $estreno)
                <div class="col-6 col-md-4 col-lg-2">
                    <a href="{{ route('publicacion.show', $estreno->id) }}">
                        @if($estreno->imagen_portada)
                            <img src="{{ asset('img/estrenos/' . $estreno->imagen_portada) }}" class="img-fluid poster" alt="{{ $estreno->titulo }}">
                        @else
                            <img src="{{ asset('img/estrenos/thedrama.jpg') }}" class="img-fluid poster" alt="{{ $estreno->titulo }}">
                        @endif
                    </a>
                </div>
            @empty
                <p class="texto-secundario">No hay estrenos disponibles.</p>
            @endforelse
        </div>
    </div>
</section>

<section class="bloque-resenas-noticias">
    <div class="container">
        <div class="row g-5">

            <div class="col-lg-8">
                <section class="resenas">
                    <h2 class="mb-4">Reseñas</h2>

                    @forelse($publicaciones->where('tipo_publicacion', 'resena') as $resena)
                        <div class="resena-item mb-4">
                            <div class="row align-items-start">
                                <div class="col-4 col-md-2">
                                    @if($resena->imagen_portada)
                                        <img src="{{ asset('img/estrenos/' . $resena->imagen_portada) }}" class="img-fluid poster-resena" alt="{{ $resena->titulo }}">
                                    @else
                                        <img src="{{ asset('img/estrenos/thedrama.jpg') }}" class="img-fluid poster-resena" alt="{{ $resena->titulo }}">
                                    @endif
                                </div>
                                <div class="col-8 col-md-10">
                                    <h4 class="mb-1">
                                        <a href="{{ route('publicacion.show', $resena->id) }}" class="text-decoration-none text-white">
                                            {{ $resena->titulo }}
                                        </a>
                                    </h4>
                                    <div class="d-flex align-items-center mb-1">
                                        @if($resena->user->foto_perfil)
                                            <img src="{{ asset('img/usuarios/' . $resena->user->foto_perfil) }}" class="foto-perfil me-2" alt="{{ $resena->user->name }}">
                                        @endif
                                        <strong>{{ $resena->user->name }}</strong>
                                    </div>
                                    <p class="mb-0 texto-secundario">
                                        {{ Str::limit($resena->resumen, 100) }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p class="texto-secundario">No hay reseñas disponibles.</p>
                    @endforelse

                </section>
            </div>

            <div class="col-lg-4">
                <section class="noticias-laterales">
                    <h2 class="mb-4">Noticias</h2>

                    @forelse($publicaciones->where('tipo_publicacion', 'noticia') as $noticia)
                        <div class="noticia-lateral mb-4">
                            @if($noticia->imagen_portada)
                                <img src="{{ asset('img/noticias/' . $noticia->imagen_portada) }}" class="img-fluid noticia-img mb-2" alt="{{ $noticia->titulo }}">
                            @else
                                <img src="{{ asset('img/noticias/noticia1.jpg') }}" class="img-fluid noticia-img mb-2" alt="{{ $noticia->titulo }}">
                            @endif
                            <h5 class="mb-0">
                                <a href="{{ route('publicacion.show', $noticia->id) }}" class="text-decoration-none text-white">
                                    {{ $noticia->titulo }}
                                </a>
                            </h5>
                        </div>
                    @empty
                        <p class="texto-secundario">No hay noticias disponibles.</p>
                    @endforelse

                </section>
            </div>

        </div>
    </div>
</section>

@endsection