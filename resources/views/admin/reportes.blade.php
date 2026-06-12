@extends('layouts.app')

@section('title', 'Reportes - Admin')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('content')

<section class="admin-header py-5">
    <div class="container">
        <h1 class="fw-bold mb-2">Reportes y estadísticas</h1>
        <p class="admin-texto-secundario mb-0">
            Consultá métricas generales del sistema y el rendimiento del blog.
        </p>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row g-4">

            <div class="col-md-4">
                <div class="admin-card p-4 text-center">
                    <h2 class="fw-bold">128</h2>
                    <p class="admin-texto-secundario mb-0">Usuarios registrados</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="admin-card p-4 text-center">
                    <h2 class="fw-bold">42</h2>
                    <p class="admin-texto-secundario mb-0">Publicaciones activas</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="admin-card p-4 text-center">
                    <h2 class="fw-bold">356</h2>
                    <p class="admin-texto-secundario mb-0">Comentarios totales</p>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="pb-5">
    <div class="container">
        <h2 class="mb-4">Publicaciones por categoría</h2>

        <div class="table-responsive">
            <table class="table admin-table align-middle">
                <thead>
                    <tr>
                        <th>Categoría</th>
                        <th>Cantidad de publicaciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Reseñas</td>
                        <td>15</td>
                    </tr>
                    <tr>
                        <td>Noticias</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>Eventos</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>Estrenos</td>
                        <td>7</td>
                    </tr>
                    <tr>
                        <td>Recomendaciones</td>
                        <td>5</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<section class="pb-5">
    <div class="container">
        <h2 class="mb-4">Actividad reciente</h2>

        <div class="admin-card p-4 mb-3">
            <p class="mb-1"><strong>Nuevo usuario registrado:</strong> Lucía Torres</p>
            <p class="admin-texto-secundario mb-0">Hace 2 horas</p>
        </div>

        <div class="admin-card p-4 mb-3">
            <p class="mb-1"><strong>Nueva publicación:</strong> The Devil Wears Prada 2</p>
            <p class="admin-texto-secundario mb-0">Hace 5 horas</p>
        </div>

        <div class="admin-card p-4">
            <p class="mb-1"><strong>Comentario moderado:</strong> comentario ocultado en Project Hail Mary</p>
            <p class="admin-texto-secundario mb-0">Hace 1 día</p>
        </div>
    </div>
</section>

@endsection