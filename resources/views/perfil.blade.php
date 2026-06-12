@extends('layouts.app')

@section('title', 'Perfil')

@section('styles') <link rel="stylesheet" href="{{ asset('css/usuario.css') }}">
@endsection

@section('content')

<section class="perfil-header py-5">
    <div class="container">
        <div class="row align-items-center g-4">

```
        <div class="col-md-2 text-center text-md-start">
            <img src="{{ asset('img/usuarios/avatar2.jpg') }}" class="avatar-perfil-grande" alt="Foto de perfil">
        </div>

        <div class="col-md-6">
            <h1 class="fw-bold mb-2">Mica Fernández</h1>
            <p class="texto-secundario mb-3">mica.fernandez@gmail.com</p>
            <p class="mb-3">Amante del cine, las comedias dramáticas y las películas que te dejan pensando.</p>

            <a href="/usuario/dashboard" class="btn btn-amarillo">
                Mi panel
            </a>
        </div>

        <div class="col-md-4">
            <div class="row text-center">
                <div class="col-6 col-md-4 mb-3">
                    <p class="perfil-stat-num mb-0">12</p>
                    <p class="texto-secundario mb-0">Reseñas</p>
                </div>
                <div class="col-6 col-md-4 mb-3">
                    <p class="perfil-stat-num mb-0">34</p>
                    <p class="texto-secundario mb-0">Comentarios</p>
                </div>
                <div class="col-6 col-md-4 mb-3">
                    <p class="perfil-stat-num mb-0">8</p>
                    <p class="texto-secundario mb-0">Favoritas</p>
                </div>
            </div>
        </div>

    </div>
</div>
```

</section>

<section class="py-5">
    <div class="container">
        <h2 class="mb-4">Actividad reciente</h2>

```
    <div class="row g-4">

        <div class="col-md-4">
            <div class="card card-actividad h-100">
                <img src="{{ asset('img/estrenos/devil.jpg') }}" class="card-img-top" alt="The Devil Wears Prada 2">
                <div class="card-body">
                    <h5 class="card-title">The Devil Wears Prada 2</h5>
                    <p class="texto-amarillo mb-2">★★★★☆</p>
                    <p class="card-text texto-secundario">
                        Última reseña publicada por Mica.
                    </p>
                    <a href="/post" class="link-amarillo">Ver publicación</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card card-actividad h-100">
                <img src="{{ asset('img/estrenos/hailmary.jpg') }}" class="card-img-top" alt="Project Hail Mary">
                <div class="card-body">
                    <h5 class="card-title">Project Hail Mary</h5>
                    <p class="texto-amarillo mb-2">★★★☆☆</p>
                    <p class="card-text texto-secundario">
                        Película recientemente guardada entre favoritas.
                    </p>
                    <a href="/post" class="link-amarillo">Ver publicación</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card card-actividad h-100">
                <img src="{{ asset('img/estrenos/thedrama.jpg') }}" class="card-img-top" alt="The Drama">
                <div class="card-body">
                    <h5 class="card-title">The Drama</h5>
                    <p class="texto-amarillo mb-2">★★★★★</p>
                    <p class="card-text texto-secundario">
                        Última publicación comentada por Mica.
                    </p>
                    <a href="/post" class="link-amarillo">Ver publicación</a>
                </div>
            </div>
        </div>

    </div>
</div>
```

</section>

@endsection
