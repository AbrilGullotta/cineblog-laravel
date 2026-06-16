<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Panel Usuario - CineBlog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-black py-3">
    <div class="container">
        <a class="navbar-brand fw-bold fs-4" href="{{ route('inicio') }}">Cineblog</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mx-auto gap-3 text-uppercase fw-semibold">
                <li class="nav-item"><a class="nav-link" href="{{ route('usuario.perfil') }}">Perfil</a></li>
                <li class="nav-item"><a class="nav-link active" href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Comentarios</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('categoria.show', 1) }}">Estrenos</a></li>
            </ul>
            <form class="d-flex me-3">
                <input class="form-control form-control-sm" type="search" placeholder="Buscar">
            </form>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-outline-light btn-sm">Salir</button>
            </form>
        </div>
    </div>
</nav>

<div class="container py-5">
    <div class="mb-5">
        <h1 class="fw-bold">Bienvenida, {{ Auth::user()->name }}</h1>
        <p class="texto-secundario">Desde acá podés acceder a tu perfil, ver tus comentarios y revisar tus publicaciones favoritas.</p>
    </div>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="card card-estreno h-100 p-4">
                <h4 class="fw-bold">Mi perfil</h4>
                <p class="texto-secundario">Editá tus datos personales, revisá tu información de cuenta y actualizá tu perfil.</p>
                <a href="{{ route('usuario.perfil') }}" class="btn btn-amarillo">Ir a mi perfil</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-estreno h-100 p-4">
                <h4 class="fw-bold">Mis comentarios</h4>
                <p class="texto-secundario">Consultá el historial de comentarios que realizaste en publicaciones del blog.</p>
                <a href="#" class="btn btn-amarillo">Ver comentarios</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-estreno h-100 p-4">
                <h4 class="fw-bold">Favoritas</h4>
                <p class="texto-secundario">Accedé a tus publicaciones o películas guardadas para volver a verlas cuando quieras.</p>
                <a href="#" class="btn btn-amarillo">Ver favoritas</a>
            </div>
        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>