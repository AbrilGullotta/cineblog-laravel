@extends('layouts.admin')

@section('title', 'Reportes - Admin')

@section('content')

<section class="admin-header py-5">
    <div class="container">
        <h1 class="fw-bold mb-2">Reportes y estadísticas</h1>
        <p class="texto-secundario mb-0">Métricas generales del sistema.</p>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row g-4">

            <div class="col-md-3">
                <div class="card card-estreno text-center p-4">
                    <h2 class="fw-bold texto-amarillo">{{ $totalUsuarios }}</h2>
                    <p class="texto-secundario mb-0">Usuarios registrados</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card card-estreno text-center p-4">
                    <h2 class="fw-bold texto-amarillo">{{ $totalPublicaciones }}</h2>
                    <p class="texto-secundario mb-0">Publicaciones activas</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card card-estreno text-center p-4">
                    <h2 class="fw-bold texto-amarillo">{{ $totalComentarios }}</h2>
                    <p class="texto-secundario mb-0">Comentarios totales</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card card-estreno text-center p-4">
                    <h2 class="fw-bold texto-amarillo">{{ $totalCategorias }}</h2>
                    <p class="texto-secundario mb-0">Categorías</p>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="pb-5">
    <div class="container">
        <h2 class="mb-4">Publicaciones por categoría</h2>
        <div class="card card-estreno p-4">
            <table class="table table-dark table-hover mb-0">
                <thead>
                    <tr>
                        <th>Categoría</th>
                        <th>Publicaciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($categorias as $categoria)
                        <tr>
                            <td>{{ $categoria->nombre_categoria }}</td>
                            <td>{{ $categoria->publicaciones_count }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2" class="text-center texto-secundario">No hay datos.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</section>

<section class="pb-5">
    <div class="container">
        <h2 class="mb-4">Últimas publicaciones</h2>
        @forelse($ultimasPublicaciones as $pub)
            <div class="card card-estreno p-4 mb-3">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <p class="mb-1"><strong>{{ $pub->titulo }}</strong></p>
                        <p class="texto-secundario mb-0">por {{ $pub->user->name }} — {{ \Carbon\Carbon::parse($pub->fecha_creacion)->diffForHumans() }}</p>
                    </div>
                    <span class="badge {{ $pub->estado_publicacion ? 'bg-success' : 'bg-secondary' }}">
                        {{ $pub->estado_publicacion ? 'Publicado' : 'Borrador' }}
                    </span>
                </div>
            </div>
        @empty
            <p class="texto-secundario">No hay publicaciones recientes.</p>
        @endforelse
    </div>
</section>

@endsection