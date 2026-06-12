@extends('layouts.app')

@section('title', 'Usuarios - Admin')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('content')

<section class="admin-header py-5">
    <div class="container d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
        <div>
            <h1 class="fw-bold mb-2">Gestión de usuarios</h1>
            <p class="admin-texto-secundario mb-0">
                Administrá las cuentas registradas del sistema y sus roles.
            </p>
        </div>

        <a href="#" class="btn btn-admin">Nuevo usuario</a>
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
                        <th>Rol</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>Mica Fernández</td>
                        <td>micafernandez@gmail.com</td>
                        <td><span class="badge text-bg-light">Usuario</span></td>
                        <td><span class="badge text-bg-success">Activo</span></td>
                        <td>
                            <a href="#" class="btn btn-sm btn-admin me-2">Editar</a>
                            <a href="#" class="btn btn-sm btn-admin-outline me-2">Cambiar rol</a>
                            <a href="#" class="btn btn-sm btn-danger">Eliminar</a>
                        </td>
                    </tr>

                    <tr>
                        <td>Marcos Díaz</td>
                        <td>marcosdiaz@gmail.com</td>
                        <td><span class="badge text-bg-light">Usuario</span></td>
                        <td><span class="badge text-bg-success">Activo</span></td>
                        <td>
                            <a href="#" class="btn btn-sm btn-admin me-2">Editar</a>
                            <a href="#" class="btn btn-sm btn-admin-outline me-2">Cambiar rol</a>
                            <a href="#" class="btn btn-sm btn-danger">Eliminar</a>
                        </td>
                    </tr>

                    <tr>
                        <td>Araceli Gómez</td>
                        <td>araceligomez@gmail.com</td>
                        <td><span class="badge text-bg-warning">Editor</span></td>
                        <td><span class="badge text-bg-success">Activo</span></td>
                        <td>
                            <a href="#" class="btn btn-sm btn-admin me-2">Editar</a>
                            <a href="#" class="btn btn-sm btn-admin-outline me-2">Cambiar rol</a>
                            <a href="#" class="btn btn-sm btn-danger">Eliminar</a>
                        </td>
                    </tr>

                    <tr>
                        <td>Lucía Torres</td>
                        <td>luciatorres@gmail.com</td>
                        <td><span class="badge text-bg-light">Usuario</span></td>
                        <td><span class="badge text-bg-secondary">Inactivo</span></td>
                        <td>
                            <a href="#" class="btn btn-sm btn-admin me-2">Editar</a>
                            <a href="#" class="btn btn-sm btn-admin-outline me-2">Cambiar rol</a>
                            <a href="#" class="btn btn-sm btn-danger">Eliminar</a>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection