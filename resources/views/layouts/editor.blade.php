<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') - Editor CineBlog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/editor.css') }}">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark py-3" style="background-color: #1a3a6b;">
    <div class="container">
        <a class="navbar-brand fw-bold fs-4" href="{{ route('inicio') }}">Cineblog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navEditor">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navEditor">
            <ul class="navbar-nav mx-auto gap-3 text-uppercase fw-semibold">
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('editor.dashboard') ? 'active' : '' }}" href="{{ route('editor.dashboard') }}">Dashboard</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('editor.publicaciones*') ? 'active' : '' }}" href="{{ route('editor.publicaciones.index') }}">Publicaciones</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('editor.categorias*') ? 'active' : '' }}" href="{{ route('editor.categorias.index') }}">Categorías</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('editor.etiquetas*') ? 'active' : '' }}" href="{{ route('editor.etiquetas.index') }}">Etiquetas</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('editor.comentarios') ? 'active' : '' }}" href="{{ route('editor.comentarios') }}">Comentarios</a></li>
            </ul>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-outline-light btn-sm">Volver al sitio</button>
            </form>
        </div>
    </div>
</nav>

<main>
    @yield('content')
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>