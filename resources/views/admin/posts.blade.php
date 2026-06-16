@extends('layouts.admin')

@section('title', 'Admin - Publicaciones')

@section('content')
<div class="container py-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold mb-0">Todas las publicaciones</h2>
        <a href="{{ route('admin.publicaciones.create') }}" class="btn btn-amarillo">+ Nueva publicación</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card card-estreno p-4">
        <table class="table table-dark table-hover mb-0">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Categoría</th>
                    <th>Tipo</th>
                    <th>Estado</th>
                    <th>Fecha</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($publicaciones ?? [] as $pub)
                    <tr>
                        <td>{{ $pub->titulo }}</td>
                        <td>{{ $pub->user->name }}</td>
                        <td>{{ $pub->categoria->nombre_categoria }}</td>
                        <td>{{ $pub->tipo_publicacion }}</td>
                        <td>
                            <span class="badge {{ $pub->estado_publicacion ? 'bg-success' : 'bg-secondary' }}">
                                {{ $pub->estado_publicacion ? 'Publicado' : 'Borrador' }}
                            </span>
                        </td>
                        <td>{{ \Carbon\Carbon::parse($pub->fecha_creacion)->format('d/m/Y') }}</td>
                        <td>
                            <a href="{{ route('admin.publicaciones.edit', $pub->id) }}" class="btn btn-sm btn-outline-light me-1">Editar</a>
                            <form action="{{ route('admin.publicaciones.destroy', $pub->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('¿Eliminás esta publicación?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center texto-secundario">No hay publicaciones todavía.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>
@endsection