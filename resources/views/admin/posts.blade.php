@extends('layouts.app')

@section('title', 'Posts - Admin')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('content')

<section class="admin-header py-5">
    <div class="container">
        <h1 class="fw-bold mb-2">Supervisión de publicaciones</h1>
        <p class="admin-texto-secundario mb-0">
            Consultá todas las publicaciones del sistema y supervisa el contenido generado por los editores.
        </p>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="table-responsive">
            <table class="table admin-table align-middle">
                <thead>
                    <tr>
                        <th>Título</th>
                        <th>Tipo</th>
                        <th>Categoría</th>
                        <th>Editor</th>
                        <th>Fecha</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>The Devil Wears Prada 2</td>
                        <td>Reseña</td>
                        <td>Estrenos</td>
                        <td>Araceli Gómez</td>
                        <td>19/04/2026</td>
                        <td><span class="badge text-bg-success">Publicada</span></td>
                        <td>
                            <a href="#" class="btn btn-sm btn-admin me-2">Ver</a>
                            <a href="#" class="btn btn-sm btn-admin-outline me-2">Ocultar</a>
                            <a href="#" class="btn btn-sm btn-danger">Eliminar</a>
                        </td>
                    </tr>

                    <tr>
                        <td>Project Hail Mary</td>
                        <td>Reseña</td>
                        <td>Estrenos</td>
                        <td>Juan Pérez</td>
                        <td>16/04/2026</td>
                        <td><span class="badge text-bg-secondary">Borrador</span></td>
                        <td>
                            <a href="#" class="btn btn-sm btn-admin me-2">Ver</a>
                            <a href="#" class="btn btn-sm btn-admin-outline me-2">Ocultar</a>
                            <a href="#" class="btn btn-sm btn-danger">Eliminar</a>
                        </td>
                    </tr>

                    <tr>
                        <td>Cannes confirmó nuevas películas</td>
                        <td>Noticia</td>
                        <td>Noticias</td>
                        <td>Araceli Gómez</td>
                        <td>15/04/2026</td>
                        <td><span class="badge text-bg-success">Publicada</span></td>
                        <td>
                            <a href="#" class="btn btn-sm btn-admin me-2">Ver</a>
                            <a href="#" class="btn btn-sm btn-admin-outline me-2">Ocultar</a>
                            <a href="#" class="btn btn-sm btn-danger">Eliminar</a>
                        </td>
                    </tr>

                    <tr>
                        <td>Maratón de clásicos en el cine</td>
                        <td>Evento</td>
                        <td>Eventos</td>
                        <td>Lucía Torres</td>
                        <td>12/04/2026</td>
                        <td><span class="badge text-bg-success">Publicada</span></td>
                        <td>
                            <a href="#" class="btn btn-sm btn-admin me-2">Ver</a>
                            <a href="#" class="btn btn-sm btn-admin-outline me-2">Ocultar</a>
                            <a href="#" class="btn btn-sm btn-danger">Eliminar</a>
                        </td>
                    </tr>

                    <tr>
                        <td>5 películas para ver este fin de semana</td>
                        <td>Recomendación</td>
                        <td>Recomendaciones</td>
                        <td>Juan Pérez</td>
                        <td>10/04/2026</td>
                        <td><span class="badge text-bg-secondary">Borrador</span></td>
                        <td>
                            <a href="#" class="btn btn-sm btn-admin me-2">Ver</a>
                            <a href="#" class="btn btn-sm btn-admin-outline me-2">Ocultar</a>
                            <a href="#" class="btn btn-sm btn-danger">Eliminar</a>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection