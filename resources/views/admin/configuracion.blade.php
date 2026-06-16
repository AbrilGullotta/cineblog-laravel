@extends('layouts.app')

@section('title', 'Configuración - Admin')

@section('content')

<section class="admin-header py-5">
    <div class="container">
        <h1 class="fw-bold mb-2">Configuración general</h1>
        <p class="texto-secundario mb-0">Modificá la información general del blog.</p>
    </div>
</section>

<section class="py-5">
    <div class="container">

        @if(session('success'))
            <div class="alert alert-success mb-4">{{ session('success') }}</div>
        @endif

        <div class="card card-estreno p-4">
            <form action="{{ route('admin.configuracion.update') }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row g-3">

                    <div class="col-12">
                        <label class="form-label">Nombre del blog</label>
                        <input type="text" name="nombre_blog" class="form-control @error('nombre_blog') is-invalid @enderror"
                            value="{{ old('nombre_blog', $configuracion->nombre_blog ?? 'Cineblog') }}" required>
                        @error('nombre_blog') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-12">
                        <label class="form-label">Descripción</label>
                        <textarea name="descripcion_blog" class="form-control" rows="4">{{ old('descripcion_blog', $configuracion->descripcion_blog ?? '') }}</textarea>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Mail de contacto</label>
                        <input type="email" name="mail_contacto" class="form-control"
                            value="{{ old('mail_contacto', $configuracion->mail_contacto ?? '') }}">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Logo</label>
                        <input type="text" name="logo" class="form-control"
                            value="{{ old('logo', $configuracion->logo ?? '') }}"
                            placeholder="nombre-archivo.png">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Estado del blog</label>
                        <select name="estado_blog" class="form-select">
                            <option value="1" {{ ($configuracion->estado_blog ?? true) ? 'selected' : '' }}>Activo</option>
                            <option value="0" {{ !($configuracion->estado_blog ?? true) ? 'selected' : '' }}>Inactivo</option>
                        </select>
                    </div>

                </div>

                <div class="mt-4 d-flex gap-3">
                    <button type="submit" class="btn btn-amarillo">Guardar cambios</button>
                    <button type="reset" class="btn btn-outline-light">Restablecer</button>
                </div>

            </form>
        </div>
    </div>
</section>

@endsection