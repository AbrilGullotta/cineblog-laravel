@extends('layouts.app')

@section('title', 'Editores - Admin')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('content')

<section class="admin-header py-5">
    <div class="container d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
        <div>
            <h1 class="fw-bold mb-2">Gestión de editores</h1>
            <p class="admin-texto-secundario mb-0">
                Administrá los usuarios con permisos de edición de contenido.
            </p>
        </div>

        <a href="#" class="btn btn-admin">Nuevo editor</a>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="table-responsive">
            <table class="table admin-table align-middle">

                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Mail</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>Araceli Gómez</td>
                        <td>araceligomez@gmail.com</td>
                        <td><span class="badge text-bg-success">Activo</span></td>
                        <td>
                            <a href="#" class="btn btn-sm btn-admin me-2">Editar</a>
                            <a href="#" class="btn btn-sm btn-warning me-2">Quitar rol</a>
                            <a href="#" class="btn btn-sm btn-danger">Eliminar</a>
                        </td>
                    </tr>

                    <tr>
                        <td>Juan Pérez</td>
                        <td>juanperez@gmail.com</td>
                        <td><span class="badge text-bg-success">Activo</span></td>
                        <td>
                            <a href="#" class="btn btn-sm btn-admin me-2">Editar</a>
                            <a href="#" class="btn btn-sm btn-warning me-2">Quitar rol</a>
                            <a href="#" class="btn btn-sm btn-danger">Eliminar</a>
                        </td>
                    </tr>

                    <tr>
                        <td>Lucía Torres</td>
                        <td>luciatorres@gmail.com</td>
                        <td><span class="badge text-bg-secondary">Inactivo</span></td>
                        <td>
                            <a href="#" class="btn btn-sm btn-admin me-2">Editar</a>
                            <a href="#" class="btn btn-sm btn-warning me-2">Quitar rol</a>
                            <a href="#" class="btn btn-sm btn-danger">Eliminar</a>
                        </td>
                    </tr>

                </tbody>

            </table>
        </div>
    </div>
</section>

@endsection