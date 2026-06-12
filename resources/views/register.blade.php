@extends('layouts.app')

@section('title', 'Registro - Cineblog')

@section('content')

<section class="login-section d-flex align-items-center justify-content-center">
    <div class="login-box">

        <h2 class="mb-4 text-center">Crear cuenta</h2>

        <form>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Nombre">
            </div>

            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Apellido">
            </div>

            <div class="mb-3">
                <input type="email" class="form-control" placeholder="Correo electrónico">
            </div>

            <div class="mb-3">
                <input type="password" class="form-control" placeholder="Contraseña">
            </div>

            <div class="mb-3">
                <input type="password" class="form-control" placeholder="Confirmar contraseña">
            </div>

            <button type="submit" class="btn btn-amarillo w-100">
                Crear cuenta
            </button>
        </form>

        <p class="text-center mt-3 texto-secundario">
            ¿Ya tenés cuenta?
            <a href="{{ url('/login') }}" class="link-amarillo">Ingresar</a>
        </p>

    </div>
</section>

@endsection