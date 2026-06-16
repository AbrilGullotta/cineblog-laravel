@extends('layouts.app')

@section('title', 'Editores - Admin')

@section('content')

<section class="admin-header py-5">
    <div class="container">
        <h1 class="fw-bold mb-2">Gestión de editores</h1>
        <p class="texto-secundario mb-0">Administrá los usuarios con permisos de edición.</p>
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
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Publicaciones</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($editores ?? [] as $editor)
                        <tr>
                            <td>{{ $editor->name }} {{ $editor->apellido }}</td>
                            <td>{{ $editor->email }}</td>
                            <td>{{ $editor->publicaciones_count }}</td>
                            <td>
                                <form action="{{ route('admin.editores.quitarRol', $editor->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn btn-sm btn-warning"
                                        onclick="return confirm('¿Quitás el rol de editor?')">Quitar rol</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center texto-secundario">No hay editores registrados.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>
</section>

@endsection