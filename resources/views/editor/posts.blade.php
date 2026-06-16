@extends('layouts.app')

@section('title', 'Gestión de Publicaciones')

@section('content')
<div class="container py-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold mb-0">Publicaciones</h2>
        <a href="{{ route('editor.publicaciones.create') }}" class="btn btn-amarillo">+ Nueva publicación</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- Formulario crear/editar --}}
    @if(isset($publicacion))
        <div class="card card-estreno p-4 mb-5">
            <h4 class="mb-3">Editar publicación</h4>
            <form action="{{ route('editor.publicaciones.update', $publicacion->id) }}" method="POST">
                @csrf
                @method('PUT')
                @include('editor.partials.form-publicacion')
                <button type="submit" class="btn btn-amarillo mt-3">Actualizar</button>
                <a href="{{ route('editor.publicaciones.index') }}" class="btn btn-outline-light mt-3 ms-2">Cancelar</a>
            </form>
        </div>
    @else
        <div class="card card-estreno p-4 mb-5" id="form-crear" style="display:none!important">
            <h4 class="mb-3">Nueva publicación</h4>
            <form action="{{ route('editor.publicaciones.store') }}" method="POST">
                @csrf
                @include('editor.partials.form-publicacion')
                <button type="submit" class="btn btn-amarillo mt-3">Guardar</button>
            </form>
        </div>
    @endif

    {{-- Listado --}}
    <div class="card card-estreno p-4">
        <table class="table table-dark table-hover mb-0">
            <thead>
                <tr>
                    <th>Título</th>
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
                        <td>{{ $pub->categoria->nombre_categoria }}</td>
                        <td>{{ $pub->tipo_publicacion }}</td>
                        <td>
                            <span class="badge {{ $pub->estado_publicacion ? 'bg-success' : 'bg-secondary' }}">
                                {{ $pub->estado_publicacion ? 'Publicado' : 'Borrador' }}
                            </span>
                        </td>
                        <td>{{ \Carbon\Carbon::parse($pub->fecha_creacion)->format('d/m/Y') }}</td>
                        <td>
                            <a href="{{ route('editor.publicaciones.edit', $pub->id) }}" class="btn btn-sm btn-outline-light me-1">Editar</a>
                            <form action="{{ route('editor.publicaciones.destroy', $pub->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('¿Eliminás esta publicación?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center texto-secundario">No hay publicaciones todavía.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>
@endsection