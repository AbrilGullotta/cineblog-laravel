@extends('layouts.app')

@section('title', 'Panel del editor - Cineblog')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/editor.css') }}">
@endsection

@section('content')

<section class="editor-header py-5">
    <div class="container">
        <h1 class="fw-bold mb-2">Panel del editor</h1>
        <p class="editor-texto-secundario mb-0">
            Desde aquí podés gestionar publicaciones, categorías, etiquetas y moderar comentarios del blog.
        </p>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row g-4">

            <div class="col-md-6 col-lg-3">
                <div class="card editor-card h-100">
                    <div class="card-body">
                        <h4 class="card-title mb-3">Publicaciones</h4>
                        <p class="editor-texto-secundario">
                            Crea, edita, publica o elimina artículos del blog.
                        </p>
                        <a href="/editor/posts" class="btn btn-editor">Gestionar</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card editor-card h-100">
                    <div class="card-body">
                        <h4 class="card-title mb-3">Categorías</h4>
                        <p class="editor-texto-secundario">
                            Organiza el contenido del sitio mediante categorías.
                        </p>
                        <a href="/editor/categorias" class="btn btn-editor">Gestionar</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card editor-card h-100">
                    <div class="card-body">
                        <h4 class="card-title mb-3">Etiquetas</h4>
                        <p class="editor-texto-secundario">
                            Administra las etiquetas para clasificar las publicaciones.
                        </p>
                        <a href="/editor/etiquetas" class="btn btn-editor">Gestionar</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card editor-card h-100">
                    <div class="card-body">
                        <h4 class="card-title mb-3">Comentarios</h4>
                        <p class="editor-texto-secundario">
                            Revisa y modera los comentarios realizados por los usuarios.
                        </p>
                        <a href="/editor/comentarios" class="btn btn-editor">Gestionar</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="pb-5">
    <div class="container">
        <h2 class="mb-4">Resumen editorial</h2>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="editor-resumen-box text-center">
                    <p class="editor-num mb-1">18</p>
                    <p class="mb-0 editor-texto-secundario">Publicaciones activas</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="editor-resumen-box text-center">
                    <p class="editor-num mb-1">5</p>
                    <p class="mb-0 editor-texto-secundario">Borradores</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="editor-resumen-box text-center">
                    <p class="editor-num mb-1">12</p>
                    <p class="mb-0 editor-texto-secundario">Comentarios pendientes</p>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection