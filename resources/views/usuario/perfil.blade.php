@extends('layouts.app')

@section('title', 'Editar perfil - Cineblog')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/usuario.css') }}">
@endsection

@section('content')

<section class="py-5">
    <div class="container">
        <div class="edit-box">

            <h1 class="fw-bold mb-4">Editar perfil</h1>

            <div class="text-center mb-4">
                <img src="{{ asset('img/usuarios/avatar2.jpg') }}" class="avatar-perfil-grande mb-3" alt="Foto de perfil">
                <div>
                    <label for="foto" class="btn btn-amarillo">Cambiar foto</label>
                    <input type="file" id="foto" class="d-none">
                </div>
            </div>

            <form>
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">Nombre</label>
                        <input type="text" class="form-control" value="Mica">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Apellido</label>
                        <input type="text" class="form-control" value="Fernández">
                    </div>

                    <div class="col-12">
                        <label class="form-label">Correo electrónico</label>
                        <input type="email" class="form-control" value="mica.gomez@gmail.com">
                    </div>

                    <div class="col-12">
                        <label class="form-label">Biografía</label>
                        <textarea class="form-control" rows="4">Amante del cine, las comedias dramáticas y las películas que te dejan pensando.</textarea>
                    </div>
                </div>

                <div class="mt-4 d-flex gap-3">
                    <button type="submit" class="btn btn-amarillo">Guardar cambios</button>
                    <a href="/perfil" class="btn btn-outline-light">Cancelar</a>
                </div>
            </form>

        </div>
    </div>
</section>

@endsection