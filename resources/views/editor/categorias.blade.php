@extends('layouts.app')

@section('title', 'Gestión de Categorías')

@section('content')
<div class="container py-5">

    <h2 class="fw-bold mb-4">Categorías</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="row g-4">

        {{-- Formulario nueva categoría --}}
        <div class="col-md-4">
            <div class="card card-estreno p-4">
                <h4 class="mb-3">Nueva categoría</h4>
                <form action="{{ route('editor.categorias.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nombre</label>
                        <input type="text" name="nombre_categoria"
                            class="form-control @error('nombre_categoria') is-invalid @enderror"
                            value="{{ old('nombre_categoria') }}" required>
                        @error('nombre_categoria')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Descripción</label>
                        <textarea name="descripcion" class="form-control" rows="3">{{ old('descripcion') }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-amarillo w-100">Guardar</button>
                </form>
            </div>
        </div>

        {{-- Listado de categorías --}}
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
                        @forelse($categorias as $categoria)
                            <tr>
                                <td>{{ $categoria->nombre_categoria }}</td>
                                <td>{{ $categoria->publicaciones_count }}</td>
                                <td>
                                    <form action="{{ route('editor.categorias.update', $categoria->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('PUT')
                                        <input type="text" name="nombre_categoria"
                                            class="form-control form-control-sm d-inline w-auto"
                                            value="{{ $categoria->nombre_categoria }}">
                                        <button type="submit" class="btn btn-sm btn-outline-light">Actualizar</button>
                                    </form>
                                    <form action="{{ route('editor.categorias.destroy', $categoria->id) }}" method="POST" class="d-inline ms-1">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"
                                            onclick="return confirm('¿Eliminás esta categoría?')">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="text-center texto-secundario">No hay categorías todavía.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
@endsection