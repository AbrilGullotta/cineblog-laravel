<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') - Admin CineBlog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark py-3" style="background-color: #c0392b;">
    <div class="container">
        <a class="navbar-brand fw-bold fs-4" href="{{ route('inicio') }}">Cineblog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navAdmin">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navAdmin">
            <ul class="navbar-nav mx-auto gap-3 text-uppercase fw-semibold">
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('admin.usuarios') ? 'active' : '' }}" href="{{ route('admin.usuarios') }}">Usuarios</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('admin.editores') ? 'active' : '' }}" href="{{ route('admin.editores') }}">Editores</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('admin.publicaciones*') ? 'active' : '' }}" href="{{ route('admin.publicaciones.index') }}">Posts</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('admin.configuracion') ? 'active' : '' }}" href="{{ route('admin.configuracion') }}">Configuración</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('admin.reportes') ? 'active' : '' }}" href="{{ route('admin.reportes') }}">Reportes</a></li>
            </ul>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-outline-light btn-sm">Salir</button>
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