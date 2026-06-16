@extends('layouts.editor')

@section('title', 'Gestión de Etiquetas')

@section('content')
<div class="container py-5">

    <h2 class="fw-bold mb-4">Etiquetas</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="row g-4">

        {{-- Formulario nueva etiqueta --}}
        <div class="col-md-4">
            <div class="card card-estreno p-4">
                <h4 class="mb-3">Nueva etiqueta</h4>
                <form action="{{ route('editor.etiquetas.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nombre</label>
                        <input type="text" name="nombre_etiqueta"
                            class="form-control @error('nombre_etiqueta') is-invalid @enderror"
                            value="{{ old('nombre_etiqueta') }}" required>
                        @error('nombre_etiqueta')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-amarillo w-100">Guardar</button>
                </form>
            </div>
        </div>

        {{-- Listado de etiquetas --}}
        <div class="col-md-8">
            <div class="card card-estreno p-4">
                <table class="table table-dark table-hover mb-0">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Publicaciones</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($etiquetas as $etiqueta)
                            <tr>
                                <td>{{ $etiqueta->nombre_etiqueta }}</td>
                                <td>{{ $etiqueta->publicaciones_count }}</td>
                                <td>
                                    <form action="{{ route('editor.etiquetas.update', $etiqueta->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('PUT')
                                        <input type="text" name="nombre_etiqueta"
                                            class="form-control form-control-sm d-inline w-auto"
                                            value="{{ $etiqueta->nombre_etiqueta }}">
                                        <button type="submit" class="btn btn-sm btn-outline-light">Actualizar</button>
                                    </form>
                                    <form action="{{ route('editor.etiquetas.destroy', $etiqueta->id) }}" method="POST" class="d-inline ms-1">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"
                                            onclick="return confirm('¿Eliminás esta etiqueta?')">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="text-center texto-secundario">No hay etiquetas todavía.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
@endsection