@extends('layouts.app')

@section('title', $categoria->nombre_categoria)

@section('content')

<header class="header-categoria text-white">
    <div class="container py-5">
        <h1 class="display-4 fw-bold">{{ $categoria->nombre_categoria }}</h1>
        <p class="texto-secundario mb-0">
            {{ $categoria->descripcion }}
        </p>
    </div>
</header>

<section class="py-5">
    <div class="container">
        <div class="row g-4">

            @forelse($publicaciones as $publicacion)
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card card-estreno h-100">
                        @if($publicacion->imagen_portada)
                            <img src="{{ asset('img/estrenos/' . $publicacion->imagen_portada) }}" class="card-img-top" alt="{{ $publicacion->titulo }}">
                        @else
                            <img src="{{ asset('img/estrenos/thedrama.jpg') }}" class="card-img-top" alt="{{ $publicacion->titulo }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $publicacion->titulo }}</h5>
                            <p class="card-text texto-secundario">
                                {{ Str::limit($publicacion->resumen, 80) }}
                            </p>
                            <a href="{{ route('publicacion.show', $publicacion->id) }}" class="btn btn-amarillo w-100">Ver más</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <p class="texto-secundario">No hay publicaciones en esta categoría todavía.</p>
                </div>
            @endforelse

        </div>

        {{-- Paginación --}}
        @if($publicaciones->hasPages())
            <div class="d-flex justify-content-center mt-5">
                {{ $publicaciones->links() }}
            </div>
        @endif

    </div>
</section>

@endsection