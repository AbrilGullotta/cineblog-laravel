@extends('layouts.app')

@section('title', 'Categorías - Editor')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/editor.css') }}">
@endsection

@section('content')

<section class="editor-header py-5">
    <div class="container d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
        <div>
            <h1 class="fw-bold mb-2">Gestión de categorías</h1>
            <p class="editor-texto-secundario mb-0">
                Administrá las categorías que organizan el contenido del blog.
            </p>
        </div>

        <a href="#" class="btn btn-editor">Nueva categoría</a>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="table-responsive">
            <table class="table editor-table align-middle">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Reseñas</td>
                        <td>Críticas y análisis de películas.</td>
                        <td class="text-center">
                            <a href="#" class="btn btn-sm btn-editor me-2">Editar</a>
                            <a href="#" class="btn btn-sm btn-danger">Eliminar</a>
                        </td>
                    </tr>

                    <tr>
                        <td>Noticias</td>
                        <td>Novedades y actualidad del mundo del cine.</td>
                        <td class="text-center">
                            <a href="#" class="btn btn-sm btn-editor me-2">Editar</a>
                            <a href="#" class="btn btn-sm btn-danger">Eliminar</a>
                        </td>
                    </tr>

                    <tr>
                        <td>Eventos</td>
                        <td>Festivales, funciones especiales y actividades.</td>
                        <td class="text-center">
                            <a href="#" class="btn btn-sm btn-editor me-2">Editar</a>
                            <a href="#" class="btn btn-sm btn-danger">Eliminar</a>
                        </td>
                    </tr>

                    <tr>
                        <td>Estrenos</td>
                        <td>Películas recientemente lanzadas o próximas a estrenarse.</td>
                        <td class="text-center">
                            <a href="#" class="btn btn-sm btn-editor me-2">Editar</a>
                            <a href="#" class="btn btn-sm btn-danger">Eliminar</a>
                        </td>
                    </tr>

                    <tr>
                        <td>Recomendaciones</td>
                        <td>Selecciones y sugerencias para descubrir nuevas películas.</td>
                        <td class="text-center">
                            <a href="#" class="btn btn-sm btn-editor me-2">Editar</a>
                            <a href="#" class="btn btn-sm btn-danger">Eliminar</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection