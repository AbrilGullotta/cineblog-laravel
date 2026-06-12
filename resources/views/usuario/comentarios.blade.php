@extends('layouts.app')

@section('title', 'Mis comentarios - Cineblog')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/usuario.css') }}">
@endsection

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

        <div class="card card-actividad mb-4">
            <div class="card-body">
                <h5 class="mb-2">The Devil Wears Prada 2</h5>
                <p class="texto-secundario mb-2">19 de abril de 2026</p>
                <p class="mb-3">
                    Miranda sigue siendo lo mejor de la película. Cada escena con ella eleva todo.
                </p>
                <a href="/post" class="link-amarillo">Ver publicación</a>
            </div>
        </div>

        <div class="card card-actividad mb-4">
            <div class="card-body">
                <h5 class="mb-2">Project Hail Mary</h5>
                <p class="texto-secundario mb-2">16 de abril de 2026</p>
                <p class="mb-3">
                    Me sorprendió mucho más de lo que esperaba. Tiene humor, tensión y momentos muy emotivos.
                </p>
                <a href="/post" class="link-amarillo">Ver publicación</a>
            </div>
        </div>

        <div class="card card-actividad mb-4">
            <div class="card-body">
                <h5 class="mb-2">The Drama</h5>
                <p class="texto-secundario mb-2">12 de abril de 2026</p>
                <p class="mb-3">
                    No sabía si me iba a gustar, pero terminó siendo una de mis favoritas del año.
                </p>
                <a href="/post" class="link-amarillo">Ver publicación</a>
            </div>
        </div>

    </div>
</section>

@endsection