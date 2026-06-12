@extends('layouts.app')

@section('title', 'Panel de usuario - Cineblog')

@section('content')

<section class="perfil-header py-5">
    <div class="container">
        <h1 class="fw-bold mb-2">Bienvenida, Mica</h1>
        <p class="texto-secundario mb-0">
            Desde acá podés acceder a tu perfil, ver tus comentarios y revisar tus publicaciones favoritas.
        </p>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row g-4">

            <div class="col-md-4">
                <div class="card card-actividad h-100">
                    <div class="card-body">
                        <h4 class="card-title mb-3">Mi perfil</h4>
                        <p class="texto-secundario">
                            Editá tus datos personales, revisá tu información de cuenta y actualizá tu perfil.
                        </p>
                        <a href="/usuario/perfil" class="btn btn-amarillo">Ir a mi perfil</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card card-actividad h-100">
                    <div class="card-body">
                        <h4 class="card-title mb-3">Mis comentarios</h4>
                        <p class="texto-secundario">
                            Consultá el historial de comentarios que realizaste en publicaciones del blog.
                        </p>
                        <a href="/usuario/comentarios" class="btn btn-amarillo">Ver comentarios</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card card-actividad h-100">
                    <div class="card-body">
                        <h4 class="card-title mb-3">Favoritas</h4>
                        <p class="texto-secundario">
                            Accedé a tus publicaciones o películas guardadas para volver a verlas cuando quieras.
                        </p>
                        <a href="/usuario/dashboard" class="btn btn-amarillo">Ver favoritas</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <h2 class="mb-4">Actividad reciente</h2>

        <div class="card card-actividad mb-3">
            <div class="card-body">
                <h5 class="mb-1">Último comentario realizado</h5>
                <p class="texto-secundario mb-0">
                    “Miranda sigue siendo lo mejor de la película.” en la publicación <strong>The Devil Wears Prada 2</strong>.
                </p>
            </div>
        </div>

        <div class="card card-actividad mb-3">
            <div class="card-body">
                <h5 class="mb-1">Última publicación guardada</h5>
                <p class="texto-secundario mb-0">
                    Guardaste la reseña de <strong>Project Hail Mary</strong> para leer más tarde.
                </p>
            </div>
        </div>

        <div class="card card-actividad">
            <div class="card-body">
                <h5 class="mb-1">Última película puntuada</h5>
                <p class="texto-secundario mb-0">
                    Calificaste <strong>The Devil Wears Prada 2</strong> con 4 estrellas.
                </p>
            </div>
        </div>
    </div>
</section>

@endsection