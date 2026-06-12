@extends('layouts.app')

@section('title', 'Login - Cineblog')

@section('content')

<section class="login-section d-flex align-items-center justify-content-center">
    <div class="login-box">

        <h2 class="mb-4 text-center">Iniciar sesión</h2>

        <form>
            <div class="mb-3">
                <input type="email" class="form-control" placeholder="Correo electrónico">
            </div>

            <div class="mb-3">
                <input type="password" class="form-control" placeholder="Contraseña">
            </div>

            <a href="{{ url('/perfil') }}" class="btn btn-amarillo w-100">
                Ingresar
            </a>
        </form>

        <p class="text-center mt-3 texto-secundario">
            ¿Todavía no tenés cuenta?
            <a href="{{ url('/register') }}" class="link-amarillo">Crear cuenta</a>
        </p>

    </div>
</section>

@endsection