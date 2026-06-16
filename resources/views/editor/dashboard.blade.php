@extends('layouts.app')

@section('title', 'Panel Editor')

@section('content')
<div class="container py-5">
    <div class="row g-4">

        <div class="col-12">
            <h2 class="fw-bold">Panel de Editor</h2>
            <p class="texto-secundario">Bienvenido, {{ Auth::user()->name }}</p>
        </div>

        <div class="col-md-4">
            <div class="card card-estreno text-center p-4">
                <h1 class="display-4 fw-bold texto-amarillo">{{ $misPublicaciones }}</h1>
                <p class="mb-0">Mis publicaciones</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card card-estreno text-center p-4">
                <h1 class="display-4 fw-bold texto-amarillo">{{ $misComentarios }}</h1>
                <p class="mb-0">Mis comentarios</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card card-estreno text-center p-4">
                <h1 class="display-4 fw-bold texto-amarillo">{{ $totalCategorias }}</h1>
                <p class="mb-0">Categorías disponibles</p>
            </div>
        </div>

        <div class="col-12 mt-2">
            <div class="card card-estreno p-4">
                <h4 class="mb-3">Acciones rápidas</h4>
                <div class="d-flex gap-3 flex-wrap">
                    <a href="{{ route('editor.publicaciones.create') }}" class="btn btn-amarillo">Nueva publicación</a>
                    <a href="{{ route('editor.publicaciones.index') }}" class="btn btn-outline-light">Mis publicaciones</a>
                    <a href="{{ route('editor.categorias.index') }}" class="btn btn-outline-light">Categorías</a>
                    <a href="{{ route('editor.etiquetas.index') }}" class="btn btn-outline-light">Etiquetas</a>
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="card card-estreno p-4">
                <h4 class="mb-3">Últimas publicaciones</h4>
                @forelse($ultimasPublicaciones as $pub)
                    <div class="d-flex justify-content-between align-items-center py-2 border-bottom border-secondary">
                        <span>{{ $pub->titulo }}</span>
                        <div class="d-flex gap-2">
                            <span class="badge {{ $pub->estado_publicacion ? 'bg-success' : 'bg-secondary' }}">
                                {{ $pub->estado_publicacion ? 'Publicado' : 'Borrador' }}
                            </span>
                            <a href="{{ route('editor.publicaciones.edit', $pub->id) }}" class="btn btn-sm btn-outline-light">Editar</a>
                        </div>
                    </div>
                @empty
                    <p class="texto-secundario mb-0">No tenés publicaciones todavía.</p>
                @endforelse
            </div>
        </div>

    </div>
</div>
@endsection