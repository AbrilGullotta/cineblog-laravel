@extends('layouts.editor')

@section('title', 'Panel Editor')

@section('content')
<div class="container py-5">
    <div class="mb-5">
        <h1 class="fw-bold">Panel del editor</h1>
        <p class="text-muted">Desde aquí podés gestionar publicaciones, categorías, etiquetas y moderar comentarios del blog.</p>
    </div>

    <div class="row g-4">
        <div class="col-md-3">
            <div class="card h-100 bg-dark text-white border border-primary">
                <div class="card-body p-4">
                    <h4 class="fw-bold">Publicaciones</h4>
                    <p class="text-muted">Crea, edita, publica o elimina artículos del blog.</p>
                    <a href="{{ route('editor.publicaciones.index') }}" class="btn btn-primary">Gestionar</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card h-100 bg-dark text-white border border-primary">
                <div class="card-body p-4">
                    <h4 class="fw-bold">Categorías</h4>
                    <p class="text-muted">Organiza el contenido del sitio mediante categorías.</p>
                    <a href="{{ route('editor.categorias.index') }}" class="btn btn-primary">Gestionar</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card h-100 bg-dark text-white border border-primary">
                <div class="card-body p-4">
                    <h4 class="fw-bold">Etiquetas</h4>
                    <p class="text-muted">Administra las etiquetas para clasificar las publicaciones.</p>
                    <a href="{{ route('editor.etiquetas.index') }}" class="btn btn-primary">Gestionar</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card h-100 bg-dark text-white border border-primary">
                <div class="card-body p-4">
                    <h4 class="fw-bold">Comentarios</h4>
                    <p class="text-muted">Revisa y modera los comentarios realizados por los usuarios.</p>
                    <a href="{{ route('editor.comentarios') }}" class="btn btn-primary">Gestionar</a>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-5">
        <h2 class="fw-bold mb-4">Resumen editorial</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card bg-dark text-white text-center p-4">
                    <h1 class="fw-bold" style="color: #4d8ef0;">{{ $misPublicaciones }}</h1>
                    <p class="mb-0">Mis publicaciones</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-dark text-white text-center p-4">
                    <h1 class="fw-bold" style="color: #4d8ef0;">{{ $misComentarios }}</h1>
                    <p class="mb-0">Mis comentarios</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-dark text-white text-center p-4">
                    <h1 class="fw-bold" style="color: #4d8ef0;">{{ $totalCategorias }}</h1>
                    <p class="mb-0">Categorías disponibles</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection