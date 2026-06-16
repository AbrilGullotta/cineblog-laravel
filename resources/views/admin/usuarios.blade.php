@extends('layouts.app')

@section('title', 'Admin - Usuarios')

@section('content')
<div class="container py-5">

    <h2 class="fw-bold mb-4">Usuarios</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card card-estreno p-4">
        <table class="table table-dark table-hover mb-0">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Rol</th>
                    <th>Registro</th>
                    <th>Publicaciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($usuarios ?? [] as $usuario)
                    <tr>
                        <td>
                            @if($usuario->foto_perfil)
                                <img src="{{ asset('img/usuarios/' . $usuario->foto_perfil) }}"
                                    class="foto-perfil me-2" alt="{{ $usuario->name }}">
                            @endif
                            {{ $usuario->name }} {{ $usuario->apellido }}
                        </td>
                        <td>{{ $usuario->email }}</td>
                        <td>
                            <span class="badge bg-secondary">
                                {{ $usuario->rol->nombre ?? 'Sin rol' }}
                            </span>
                        </td>
                        <td>{{ $usuario->fecha_registro ? \Carbon\Carbon::parse($usuario->fecha_registro)->format('d/m/Y') : '-' }}</td>
                        <td>{{ $usuario->publicaciones_count }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center texto-secundario">No hay usuarios registrados.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>
@endsection