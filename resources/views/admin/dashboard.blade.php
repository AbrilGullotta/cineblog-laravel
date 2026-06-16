@extends('layouts.admin')

@section('title', 'Panel Admin')

@section('content')
<div class="container py-5">
    <div class="mb-5">
        <h1 class="fw-bold">Panel de administrador</h1>
        <p class="text-muted">Gestioná usuarios, editores, publicaciones, configuración y estadísticas del sistema.</p>
    </div>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="card h-100 bg-dark text-white border border-danger">
                <div class="card-body p-4">
                    <h4 class="fw-bold">Usuarios</h4>
                    <p class="text-muted">Administra las cuentas registradas y sus permisos.</p>
                    <a href="{{ route('admin.usuarios') }}" class="btn btn-danger">Ir a usuarios</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 bg-dark text-white border border-danger">
                <div class="card-body p-4">
                    <h4 class="fw-bold">Editores</h4>
                    <p class="text-muted">Gestiona los usuarios con permisos de edición de contenido.</p>
                    <a href="{{ route('admin.editores') }}" class="btn btn-danger">Ir a editores</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 bg-dark text-white border border-danger">
                <div class="card-body p-4">
                    <h4 class="fw-bold">Posts</h4>
                    <p class="text-muted">Supervisa todas las publicaciones del sistema.</p>
                    <a href="{{ route('admin.publicaciones.index') }}" class="btn btn-danger">Ir a posts</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card h-100 bg-dark text-white border border-danger">
                <div class="card-body p-4">
                    <h4 class="fw-bold">Configuracion</h4>
                    <p class="text-muted">Modifica parametros generales del blog.</p>
                    <a href="{{ route('admin.configuracion') }}" class="btn btn-danger">Ir a configuracion</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card h-100 bg-dark text-white border border-danger">
                <div class="card-body p-4">
                    <h4 class="fw-bold">Reportes</h4>
                    <p class="text-muted">Consulta metricas, actividad y estadisticas del sistema.</p>
                    <a href="{{ route('admin.reportes') }}" class="btn btn-danger">Ir a reportes</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection