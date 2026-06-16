@extends('layouts.app')

@section('title', 'Mi Perfil')

@section('content')

<section class="perfil-header py-5">
    <div class="container">
        <div class="row align-items-center g-4">

            <div class="col-md-2 text-center">
                @if(Auth::user()->foto_perfil)
                    <img src="{{ asset('img/usuarios/' . Auth::user()->foto_perfil) }}"
                        class="rounded-circle" style="width:120px;height:120px;object-fit:cover;" alt="Foto de perfil">
                @else
                    <img src="{{ asset('img/usuarios/avatar1.jpg') }}"
                        class="rounded-circle" style="width:120px;height:120px;object-fit:cover;" alt="Foto de perfil">
                @endif
            </div>

            <div class="col-md-6">
                <h1 class="fw-bold mb-2">{{ Auth::user()->name }} {{ Auth::user()->apellido }}</h1>
                <p class="texto-secundario mb-3">{{ Auth::user()->email }}</p>
                <div class="d-flex gap-3">
                    <a href="{{ route('dashboard') }}" class="btn btn-amarillo">Mi panel</a>
                    <a href="{{ route('profile.edit') }}" class="btn btn-outline-light">Editar perfil</a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="row text-center">
                    <div class="col-4">
                        <p class="perfil-stat-num mb-0">{{ Auth::user()->publicaciones->count() }}</p>
                        <p class="texto-secundario mb-0">Publicaciones</p>
                    </div>
                    <div class="col-4">
                        <p class="perfil-stat-num mb-0">{{ Auth::user()->comentarios->count() }}</p>
                        <p class="texto-secundario mb-0">Comentarios</p>
                    </div>
                    <div class="col-4">
                        <p class="perfil-stat-num mb-0">{{ Auth::user()->likes->count() }}</p>
                        <p class="texto-secundario mb-0">Likes</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <h2 class="mb-4">Actividad reciente</h2>

        <div class="row g-4">
            @forelse(Auth::user()->publicaciones()->with('categoria')->latest()->take(3)->get() as $pub)
                <div class="col-md-4">
                    <div class="card card-estreno h-100">
                        @if($pub->imagen_portada)
                            <img src="{{ asset('img/estrenos/' . $pub->imagen_portada) }}" class="card-img-top" alt="{{ $pub->titulo }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $pub->titulo }}</h5>
                            <p class="texto-secundario mb-2">{{ $pub->categoria->nombre_categoria }}</p>
                            <a href="{{ route('publicacion.show', $pub->id) }}" class="link-amarillo">Ver publicación</a>
                        </div>
                    </div>
                </div>
            @empty
                <p class="texto-secundario">No hay actividad reciente todavía.</p>
            @endforelse
        </div>
    </div>
</section>

@endsection