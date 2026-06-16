@extends('layouts.app')

@section('title', 'Panel Admin')

@section('content')
<div class="container py-5">
    <div class="row g-4">

        <div class="col-12">
            <h2 class="fw-bold">Panel de Administración</h2>
            <p class="texto-secundario">Bienvenido, {{ Auth::user()->name }}</p>
        </div>

        <div class="col-md-3">
            <div class="card card-estreno text-center p-4">
                <h1 class="display-4 fw-bold texto-amarillo">{{ $totalPublicaciones }}</h1>
                <p class="mb-0">Publicaciones</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card card-estreno text-center p-4">
                <h1 class="display-4 fw-bold texto-amarillo">{{ $totalUsuarios }}</h1>
                <p class="mb-0">Usuarios</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card card-estreno text-center p-4">
                <h1 class="display-4 fw-bold texto-amarillo">{{ $totalComentarios }}</h1>
                <p class="mb-0">Comentarios</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card card-estreno text-center p-4">
                <h1 class="display-4 fw-bold texto-amarillo">{{ $totalCategorias }}</h1>
                <p class="mb-0">Categorías</p>
            </div>
        </div>

       <div class="col-12 mt-2">
    <div class="card card-estreno p-4">
        <h4 class="mb-3">Gestión rápida</h4>
        <div class="d-flex gap-3 flex-wrap">
            <a href="{{ route('admin.publicaciones.index') }}" class="btn btn-amarillo">Publicaciones</a>
            <a href="{{ route('editor.categorias.index') }}" class="btn btn-amarillo">Categorías</a>
            <a href="{{ route('editor.etiquetas.index') }}" class="btn btn-amarillo">Etiquetas</a>
            <a href="{{ route('admin.peliculas.index') }}" class="btn btn-amarillo">Películas</a>
        </div>
    </div>
</div>
            </div>
        </div>

    </div>
</div>
@endsection