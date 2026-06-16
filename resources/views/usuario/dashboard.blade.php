@extends('layouts.app')

@section('title', 'Mi Panel')

@section('content')
<div class="container py-5">
    <div class="row g-4">

        <div class="col-12">
            <h2 class="fw-bold">Bienvenido, {{ Auth::user()->name }}</h2>
            <p class="texto-secundario">Este es tu panel personal.</p>
        </div>

        <div class="col-md-4">
            <div class="card card-estreno text-center p-4">
                <h1 class="display-4 fw-bold texto-amarillo">{{ Auth::user()->publicaciones->count() }}</h1>
                <p class="mb-0">Publicaciones</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card card-estreno text-center p-4">
                <h1 class="display-4 fw-bold texto-amarillo">{{ Auth::user()->comentarios->count() }}</h1>
                <p class="mb-0">Comentarios</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card card-estreno text-center p-4">
                <h1 class="display-4 fw-bold texto-amarillo">{{ Auth::user()->likes->count() }}</h1>
                <p class="mb-0">Likes</p>
            </div>
        </div>

        <div class="col-12 mt-4">
            <div class="card card-estreno p-4">
                <h4 class="mb-3">Acciones rápidas</h4>
                <div class="d-flex gap-3">
                    <a href="{{ route('usuario.perfil') }}" class="btn btn-amarillo">Mi perfil</a>
                    <a href="{{ route('inicio') }}" class="btn btn-outline-light">Ver publicaciones</a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection