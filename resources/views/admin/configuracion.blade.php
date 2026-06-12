@extends('layouts.app')

@section('title', 'Configuración - Admin')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('content')

<section class="admin-header py-5">
    <div class="container">
        <h1 class="fw-bold mb-2">Configuración general</h1>
        <p class="admin-texto-secundario mb-0">
            Modificá la información general del blog.
        </p>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="admin-card p-4">
            <form>
                <div class="row g-3">

                    <div class="col-12">
                        <label class="form-label">Nombre del blog</label>
                        <input type="text" class="form-control" value="Cineblog">
                    </div>

                    <div class="col-12">
                        <label class="form-label">Descripción</label>
                        <textarea class="form-control" rows="4">Para los amantes del cine.</textarea>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Mail de contacto</label>
                        <input type="email" class="form-control" value="contacto@cineblog.com">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Cantidad de publicaciones por página</label>
                        <input type="number" class="form-control" value="10">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Logo</label>
                        <input type="file" class="form-control">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Estado del blog</label>
                        <select class="form-select">
                            <option selected>Activo</option>
                            <option>Inactivo</option>
                        </select>
                    </div>

                </div>

                <div class="mt-4 d-flex gap-3">
                    <button type="submit" class="btn btn-admin">Guardar cambios</button>
                    <button type="reset" class="btn btn-admin-outline">Restablecer</button>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection