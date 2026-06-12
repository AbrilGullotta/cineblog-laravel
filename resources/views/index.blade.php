@extends('layouts.app')

@section('title', 'Cineblog')

@section('content')

<header class="hero d-flex align-items-end">
    <div class="container pb-5">
        <h1 class="display-3 fw-bold">
            The Drama
        </h1>
    </div>
</header>

<section class="estrenos">
    <div class="container">

```
    <h2 class="mb-4">Estrenos</h2>

    <div class="row g-3">

        <div class="col-6 col-md-4 col-lg-2">
            <img src="{{ asset('img/estrenos/thedrama.jpg') }}" class="img-fluid poster" alt="The Drama">
        </div>

        <div class="col-6 col-md-4 col-lg-2">
            <img src="{{ asset('img/estrenos/devil.jpg') }}" class="img-fluid poster" alt="Devil">
        </div>

        <div class="col-6 col-md-4 col-lg-2">
            <img src="{{ asset('img/estrenos/hailmary.jpg') }}" class="img-fluid poster" alt="Project Hail Mary">
        </div>

        <div class="col-6 col-md-4 col-lg-2">
            <img src="{{ asset('img/estrenos/mario.jpg') }}" class="img-fluid poster" alt="Mario">
        </div>

        <div class="col-6 col-md-4 col-lg-2">
            <img src="{{ asset('img/estrenos/themummy.jpg') }}" class="img-fluid poster" alt="The Mummy">
        </div>

        <div class="col-6 col-md-4 col-lg-2">
            <img src="{{ asset('img/estrenos/trash.jpg') }}" class="img-fluid poster" alt="Trash">
        </div>

    </div>

</div>
```

</section>

<section class="bloque-resenas-noticias">
    <div class="container">
        <div class="row g-5">

```
        <div class="col-lg-8">
            <section class="resenas">
                <h2 class="mb-4">Reseñas</h2>

                <div class="resena-item mb-4">
                    <div class="row align-items-start">
                        <div class="col-4 col-md-2">
                            <img src="{{ asset('img/estrenos/thedrama.jpg') }}" class="img-fluid poster-resena" alt="The Drama">
                        </div>
                        <div class="col-8 col-md-10">
                            <h4 class="mb-1">The Drama</h4>
                            <p class="mb-1 texto-amarillo">★★★★☆</p>
                            <div class="d-flex align-items-center mb-1">
                                <img src="{{ asset('img/usuarios/avatar3.jpg') }}" class="foto-perfil me-2" alt="Araceli">
                                <strong>Araceli</strong>
                            </div>
                            <p class="mb-0 texto-secundario">
                                "we listen, we don't judge" gone wrong
                            </p>
                        </div>
                    </div>
                </div>

                <div class="resena-item mb-4">
                    <div class="row align-items-start">
                        <div class="col-4 col-md-2">
                            <img src="{{ asset('img/estrenos/hailmary.jpg') }}" class="img-fluid poster-resena" alt="Project Hail Mary">
                        </div>
                        <div class="col-8 col-md-10">
                            <h4 class="mb-1">Project Hail Mary</h4>
                            <p class="mb-1 texto-amarillo">★★★☆☆</p>
                            <div class="d-flex align-items-center mb-1">
                                <img src="{{ asset('img/usuarios/avatar2.jpg') }}" class="foto-perfil me-2" alt="Mica">
                                <strong>Mica</strong>
                            </div>
                            <p class="mb-0 texto-secundario">
                                the definition of “accidentally became important at work and it’s ruining my life”
                            </p>
                        </div>
                    </div>
                </div>

                <div class="resena-item mb-4">
                    <div class="row align-items-start">
                        <div class="col-4 col-md-2">
                            <img src="{{ asset('img/estrenos/mario.jpg') }}" class="img-fluid poster-resena" alt="The Super Mario Galaxy Movie">
                        </div>
                        <div class="col-8 col-md-10">
                            <h4 class="mb-1">The Super Mario Galaxy Movie</h4>
                            <p class="mb-1 texto-amarillo">★★★★★</p>
                            <div class="d-flex align-items-center mb-1">
                                <img src="{{ asset('img/usuarios/avatar1.jpg') }}" class="foto-perfil me-2" alt="Marcos">
                                <strong>Marcos</strong>
                            </div>
                            <p class="mb-0 texto-secundario">
                                If you like Rosalina I'd probably sit this one out.
                            </p>
                        </div>
                    </div>
                </div>

            </section>
        </div>

        <div class="col-lg-4">
            <section class="noticias-laterales">
                <h2 class="mb-4">Noticias</h2>

                <div class="noticia-lateral mb-4">
                    <img src="{{ asset('img/noticias/noticia1.jpg') }}" class="img-fluid noticia-img mb-2" alt="Noticia 1">
                    <h5 class="mb-0">Un film imperdible en el Bafici: ganó varios premios, fue filmado en Mendoza y está basado en hechos reales</h5>
                </div>

                <div class="noticia-lateral mb-4">
                    <img src="{{ asset('img/noticias/noticia2.jpg') }}" class="img-fluid noticia-img mb-2" alt="Noticia 2">
                    <h5 class="mb-0">Los Amantes del Cine reestrenan la obra cumbre de Jean-Luc Goddard</h5>
                </div>

                <div class="noticia-lateral mb-4">
                    <img src="{{ asset('img/noticias/noticia3.jpg') }}" class="img-fluid noticia-img mb-2" alt="Noticia 3">
                    <h5 class="mb-0">El cine llora la muerte de Nathalie Baye, a los 77 años</h5>
                </div>

            </section>
        </div>

    </div>
</div>
```

</section>

@endsection
