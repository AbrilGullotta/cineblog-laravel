@extends('layouts.app')

@section('title', 'Admin - Películas')

@section('content')
<div class="container py-5">

    <h2 class="fw-bold mb-4">Películas</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="row g-4">

        <div class="col-md-4">
            <div class="card card-estreno p-4">
                <h4 class="mb-3">Nueva película</h4>
                <form action="{{ route('admin.peliculas.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Título</label>
                        <input type="text" name="titulo" class="form-control @error('titulo') is-invalid @enderror"
                            value="{{ old('titulo') }}" required>
                        @error('titulo') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Director</label>
                        <input type="text" name="director" class="form-control @error('director') is-invalid @enderror"
                            value="{{ old('director') }}" required>
                        @error('director') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="row g-2">
                        <div class="col-6">
                            <label class="form-label">Año</label>
                            <input type="number" name="anio_estreno" class="form-control"
                                value="{{ old('anio_estreno') }}" required>
                        </div>
                        <div class="col-6">
                            <label class="form-label">Duración (min)</label>
                            <input type="number" name="duracion" class="form-control"
                                value="{{ old('duracion') }}" required>
                        </div>
                    </div>
                    <div class="mb-3 mt-2">
                        <label class="form-label">País</label>
                        <input type="text" name="pais" class="form-control"
                            value="{{ old('pais') }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Sinopsis</label>
                        <textarea name="sinopsis" class="form-control" rows="3" required>{{ old('sinopsis') }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Imagen portada</label>
                        <input type="text" name="imagen_portada" class="form-control"
                            value="{{ old('imagen_portada') }}" placeholder="nombre-archivo.jpg">
                    </div>
                    <button type="submit" class="btn btn-amarillo w-100">Guardar</button>
                </form>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card card-estreno p-4">
                <table class="table table-dark table-hover mb-0">
                    <thead>
                        <tr>
                            <th>Título</th>
                            <th>Director</th>
                            <th>Año</th>
                            <th>País</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($peliculas as $pelicula)
                            <tr>
                                <td>{{ $pelicula->titulo }}</td>
                                <td>{{ $pelicula->director }}</td>
                                <td>{{ $pelicula->anio_estreno }}</td>
                                <td>{{ $pelicula->pais }}</td>
                                <td>
                                    <a href="{{ route('admin.peliculas.edit', $pelicula->id) }}"
                                        class="btn btn-sm btn-outline-light me-1">Editar</a>
                                    <form action="{{ route('admin.peliculas.destroy', $pelicula->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"
                                            onclick="return confirm('¿Eliminás esta película?')">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center texto-secundario">No hay películas cargadas todavía.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                {{-- Paginación --}}
                @if($peliculas->hasPages())
                    <div class="d-flex justify-content-center mt-4">
                        {{ $peliculas->links() }}
                    </div>
                @endif

            </div>
        </div>

    </div>
</div>
@endsection