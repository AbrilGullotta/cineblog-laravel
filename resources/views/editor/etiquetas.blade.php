@extends('layouts.app')

@section('title', 'Etiquetas - Editor')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/editor.css') }}">
@endsection

@section('content')

<section class="editor-header py-5">
    <div class="container d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
        <div>
            <h1 class="fw-bold mb-2">Gestión de etiquetas</h1>
            <p class="editor-texto-secundario mb-0">
                Administra las etiquetas para clasificar mejor las publicaciones.
            </p>
        </div>

        <a href="#" class="btn btn-editor">Nueva etiqueta</a>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="table-responsive">
            <table class="table editor-table align-middle">
                <thead>
                    <tr>
                        <th>Nombre de etiqueta</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Drama</td>
                        <td class="text-center">
                            <a href="#" class="btn btn-sm btn-editor me-2">Editar</a>
                            <a href="#" class="btn btn-sm btn-danger">Eliminar</a>
                        </td>
                    </tr>

                    <tr>
                        <td>Comedia</td>
                        <td class="text-center">
                            <a href="#" class="btn btn-sm btn-editor me-2">Editar</a>
                            <a href="#" class="btn btn-sm btn-danger">Eliminar</a>
                        </td>
                    </tr>

                    <tr>
                        <td>Evento</td>
                        <td class="text-center">
                            <a href="#" class="btn btn-sm btn-editor me-2">Editar</a>
                            <a href="#" class="btn btn-sm btn-danger">Eliminar</a>
                        </td>
                    </tr>

                    <tr>
                        <td>Moda</td>
                        <td class="text-center">
                            <a href="#" class="btn btn-sm btn-editor me-2">Editar</a>
                            <a href="#" class="btn btn-sm btn-danger">Eliminar</a>
                        </td>
                    </tr>

                    <tr>
                        <td>Clásicos</td>
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