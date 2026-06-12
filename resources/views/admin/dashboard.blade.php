@extends('layouts.app')

@section('title', 'Dashboard Admin - Cineblog')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('content')

<section class="admin-header py-5">
    <div class="container">
        <h1 class="fw-bold mb-2">Panel de administrador</h1>
        <p class="admin-texto-secundario mb-0">
            Gestioná usuarios, editores, publicaciones, configuración y estadísticas del sistema.
        </p>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row g-4">

            <div class="col-md-6 col-lg-4">
                <div class="admin-card p-4 h-100">
                    <h4>Usuarios</h4>
                    <p class="admin-texto-secundario">
                        Administra las cuentas registradas y sus permisos.
                    </p>
                    <a href="/admin/usuarios" class="btn btn-admin">Ir a usuarios</a>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="admin-card p-4 h-100">
                    <h4>Editores</h4>
                    <p class="admin-texto-secundario">
                        Gestiona los usuarios con permisos de edición de contenido.
                    </p>
                    <a href="/admin/editores" class="btn btn-admin">Ir a editores</a>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="admin-card p-4 h-100">
                    <h4>Posts</h4>
                    <p class="admin-texto-secundario">
                        Supervisa todas las publicaciones del sistema.
                    </p>
                    <a href="/admin/posts" class="btn btn-admin">Ir a posts</a>
                </div>
            </div>

            <div class="col-md-6 col-lg-6">
                <div class="admin-card p-4 h-100">
                    <h4>Configuración</h4>
                    <p class="admin-texto-secundario">
                        Modifica parámetros generales del blog.
                    </p>
                    <a href="/admin/configuracion" class="btn btn-admin">Ir a configuración</a>
                </div>
            </div>

            <div class="col-md-6 col-lg-6">
                <div class="admin-card p-4 h-100">
                    <h4>Reportes</h4>
                    <p class="admin-texto-secundario">
                        Consulta métricas, actividad y estadísticas del sistema.
                    </p>
                    <a href="/admin/reportes" class="btn btn-admin">Ir a reportes</a>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="pb-5">
    <div class="container">
        <h2 class="mb-4">Actividad</h2>

        <div class="row g-4">
            <div class="col-md-3">
                <div class="admin-card p-4 text-center">
                    <h2 class="fw-bold">128</h2>
                    <p class="admin-texto-secundario mb-0">Usuarios</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="admin-card p-4 text-center">
                    <h2 class="fw-bold">12</h2>
                    <p class="admin-texto-secundario mb-0">Editores</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="admin-card p-4 text-center">
                    <h2 class="fw-bold">42</h2>
                    <p class="admin-texto-secundario mb-0">Posts activos</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="admin-card p-4 text-center">
                    <h2 class="fw-bold">356</h2>
                    <p class="admin-texto-secundario mb-0">Comentarios</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection