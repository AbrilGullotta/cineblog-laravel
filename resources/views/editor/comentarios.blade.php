@extends('layouts.app')

@section('title', 'Comentarios - Editor')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/editor.css') }}">
@endsection

@section('content')

<section class="editor-header py-5">
    <div class="container">
        <h1 class="fw-bold mb-2">Moderación de comentarios</h1>
        <p class="editor-texto-secundario mb-0">
            Revisá y gestioná los comentarios realizados por los usuarios.
        </p>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="table-responsive">
            <table class="table editor-table align-middle">

                <thead>
                    <tr>
                        <th>Usuario</th>
                        <th>Comentario</th>
                        <th>Publicación</th>
                        <th>Fecha</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>Mica</td>
                        <td>Miranda sigue siendo lo mejor de la película.</td>
                        <td>The Devil Wears Prada 2</td>
                        <td>19/04/2026</td>
                        <td><span class="badge text-bg-success">Aprobado</span></td>
                        <td>
                            <a href="#" class="btn btn-sm btn-editor-outline">Ocultar</a>
                            <a href="#" class="btn btn-sm btn-danger">Eliminar</a>
                        </td>
                    </tr>

                    <tr>
                        <td>Marcos</td>
                        <td>Me gustó más de lo que esperaba, sólida.</td>
                        <td>Project Hail Mary</td>
                        <td>16/04/2026</td>
                        <td><span class="badge text-bg-warning">Pendiente</span></td>
                        <td>
                            <a href="#" class="btn btn-sm btn-success">Aprobar</a>
                            <a href="#" class="btn btn-sm btn-danger">Eliminar</a>
                        </td>
                    </tr>

                    <tr>
                        <td>Araceli</td>
                        <td>No me convenció el final, pero igual la disfruté.</td>
                        <td>The Drama</td>
                        <td>12/04/2026</td>
                        <td><span class="badge text-bg-secondary">Oculto</span></td>
                        <td>
                            <a href="#" class="btn btn-sm btn-success">Aprobar</a>
                            <a href="#" class="btn btn-sm btn-danger">Eliminar</a>
                        </td>
                    </tr>

                </tbody>

            </table>
        </div>
    </div>
</section>

@endsection