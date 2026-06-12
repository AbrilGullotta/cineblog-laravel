@extends('layouts.app')

@section('title', 'Publicaciones - Editor')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/editor.css') }}">
@endsection

@section('content')

<section class="editor-header py-5">
    <div class="container d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
        <div>
            <h1 class="fw-bold mb-2">Gestión de publicaciones</h1>
            <p class="editor-texto-secundario mb-0">
                Administrá las reseñas, noticias, eventos, estrenos y recomendaciones del blog.
            </p>
        </div>

        <a href="#" class="btn btn-editor">
            <i class="bi bi-plus-lg me-2"></i>Nueva publicación
        </a>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="table-responsive">
            <table class="table editor-table align-middle">
                <thead>
                    <tr>
                        <th>Título</th>
                        <th>Tipo</th>
                        <th>Categoría</th>
                        <th>Fecha</th>
                        <th>Estado</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>The Devil Wears Prada 2</td>
                        <td>Reseña</td>
                        <td>Estrenos</td>
                        <td>19/04/2026</td>
                        <td><span class="badge bg-success">Publicada</span></td>
                        <td class="text-center">
                            <a href="#" class="btn btn-sm btn-editor me-2">Editar</a>
                            <a href="#" class="btn btn-sm btn-editor-outline me-2">Despublicar</a>
                            <a href="#" class="btn btn-sm btn-danger">Eliminar</a>
                        </td>
                    </tr>

                    <tr>
                        <td>Project Hail Mary</td>
                        <td>Reseña</td>
                        <td>Estrenos</td>
                        <td>16/04/2026</td>
                        <td><span class="badge bg-secondary">Borrador</span></td>
                        <td class="text-center">
                            <a href="#" class="btn btn-sm btn-editor me-2">Editar</a>
                            <a href="#" class="btn btn-sm btn-success me-2">Publicar</a>
                            <a href="#" class="btn btn-sm btn-danger">Eliminar</a>
                        </td>
                    </tr>

                    <tr>
                        <td>Cannes confirmó nuevas películas</td>
                        <td>Noticia</td>
                        <td>Noticias</td>
                        <td>15/04/2026</td>
                        <td><span class="badge bg-success">Publicada</span></td>
                        <td class="text-center">
                            <a href="#" class="btn btn-sm btn-editor me-2">Editar</a>
                            <a href="#" class="btn btn-sm btn-editor-outline me-2">Despublicar</a>
                            <a href="#" class="btn btn-sm btn-danger">Eliminar</a>
                        </td>
                    </tr>

                    <tr>
                        <td>Maratón de clásicos en el cine</td>
                        <td>Evento</td>
                        <td>Eventos</td>
                        <td>12/04/2026</td>
                        <td><span class="badge bg-success">Publicada</span></td>
                        <td class="text-center">
                            <a href="#" class="btn btn-sm btn-editor me-2">Editar</a>
                            <a href="#" class="btn btn-sm btn-editor-outline me-2">Despublicar</a>
                            <a href="#" class="btn btn-sm btn-danger">Eliminar</a>
                        </td>
                    </tr>

                    <tr>
                        <td>5 películas para ver este fin de semana</td>
                        <td>Recomendación</td>
                        <td>Recomendaciones</td>
                        <td>10/04/2026</td>
                        <td><span class="badge bg-secondary">Borrador</span></td>
                        <td class="text-center">
                            <a href="#" class="btn btn-sm btn-editor me-2">Editar</a>
                            <a href="#" class="btn btn-sm btn-success me-2">Publicar</a>
                            <a href="#" class="btn btn-sm btn-danger">Eliminar</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection