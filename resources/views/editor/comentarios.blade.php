@extends('layouts.editor')

@section('title', 'Comentarios - Editor')

@section('content')

<section class="editor-header py-5">
    <div class="container">
        <h1 class="fw-bold mb-2">Moderación de comentarios</h1>
        <p class="texto-secundario mb-0">Revisá y gestioná los comentarios realizados por los usuarios.</p>
    </div>
</section>

<section class="py-5">
    <div class="container">

        @if(session('success'))
            <div class="alert alert-success mb-4">{{ session('success') }}</div>
        @endif

        <div class="card card-estreno p-4">
            <table class="table table-dark table-hover mb-0">
                <thead>
                    <tr>
                        <th>Usuario</th>
                        <th>Comentario</th>
                        <th>Publicación</th>
                        <th>Fecha</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($comentarios as $comentario)
                        <tr>
                            <td>{{ $comentario->user->name }}</td>
                            <td>{{ Str::limit($comentario->contenido, 60) }}</td>
                            <td>{{ $comentario->publicacion->titulo }}</td>
                            <td>{{ \Carbon\Carbon::parse($comentario->fecha_comentario)->format('d/m/Y') }}</td>
                            <td>
                                <span class="badge {{ $comentario->estado_comentario ? 'bg-success' : 'bg-secondary' }}">
                                    {{ $comentario->estado_comentario ? 'Activo' : 'Oculto' }}
                                </span>
                            </td>
                            <td>
                                <form action="{{ route('comentarios.destroy', $comentario->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger"
                                        onclick="return confirm('¿Eliminás este comentario?')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center texto-secundario">No hay comentarios todavía.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection