@extends('layouts.app')

@section('title', 'Estrenos')

@section('content')

<header class="header-categoria text-white">
    <div class="container py-5">
        <h1 class="display-4 fw-bold">Estrenos</h1>
        <p class="texto-secundario mb-0">
            Descubrí los lanzamientos más esperados y las novedades que llegan al cine.
        </p>
    </div>
</header>

<section class="py-5">
    <div class="container">
        <div class="row g-4">

```
        <div class="col-6 col-md-4 col-lg-3">
            <div class="card card-estreno h-100">
                <img src="{{ asset('img/estrenos/devil.jpg') }}" class="card-img-top" alt="The Devil Wears Prada">
                <div class="card-body">
                    <h5 class="card-title">The Devil Wears Prada</h5>
                    <p class="card-text texto-secundario">
                        Meet Andy Sachs. A million girls would kill to have her job. She’s not one of them.
                    </p>
                    <a href="/post" class="btn btn-amarillo w-100">Ver más</a>
                </div>
            </div>
        </div>

        <div class="col-6 col-md-4 col-lg-3">
            <div class="card card-estreno h-100">
                <img src="{{ asset('img/estrenos/mario.jpg') }}" class="card-img-top" alt="The Super Mario Galaxy Movie">
                <div class="card-body">
                    <h5 class="card-title">The Super Mario Galaxy Movie</h5>
                    <p class="card-text texto-secundario">
                        The galaxy awaits.
                    </p>
                    <a href="/post" class="btn btn-amarillo w-100">Ver más</a>
                </div>
            </div>
        </div>

        <div class="col-6 col-md-4 col-lg-3">
            <div class="card card-estreno h-100">
                <img src="{{ asset('img/estrenos/thedrama.jpg') }}" class="card-img-top" alt="The Drama">
                <div class="card-body">
                    <h5 class="card-title">The Drama</h5>
                    <p class="card-text texto-secundario">
                        Witness the wedding of the year.
                    </p>
                    <a href="/post" class="btn btn-amarillo w-100">Ver más</a>
                </div>
            </div>
        </div>

        <div class="col-6 col-md-4 col-lg-3">
            <div class="card card-estreno h-100">
                <img src="{{ asset('img/estrenos/hailmary.jpg') }}" class="card-img-top" alt="Project Hail Mary">
                <div class="card-body">
                    <h5 class="card-title">Project Hail Mary</h5>
                    <p class="card-text texto-secundario">
                        Believe in the Hail Mary.
                    </p>
                    <a href="/post" class="btn btn-amarillo w-100">Ver más</a>
                </div>
            </div>
        </div>

        <div class="col-6 col-md-4 col-lg-3">
            <div class="card card-estreno h-100">
                <img src="{{ asset('img/estrenos/themummy.jpg') }}" class="card-img-top" alt="The Mummy">
                <div class="card-body">
                    <h5 class="card-title">The Mummy</h5>
                    <p class="card-text texto-secundario">
                        What happened to Katie?
                    </p>
                    <a href="/post" class="btn btn-amarillo w-100">Ver más</a>
                </div>
            </div>
        </div>

        <div class="col-6 col-md-4 col-lg-3">
            <div class="card card-estreno h-100">
                <img src="{{ asset('img/estrenos/trash.jpg') }}" class="card-img-top" alt="Thrash">
                <div class="card-body">
                    <h5 class="card-title">Thrash</h5>
                    <p class="card-text texto-secundario">
                        If the flood doesn’t kill you…
                    </p>
                    <a href="/post" class="btn btn-amarillo w-100">Ver más</a>
                </div>
            </div>
        </div>

        <div class="col-6 col-md-4 col-lg-3">
            <div class="card card-estreno h-100">
                <img src="{{ asset('img/estrenos/roommates.jpg') }}" class="card-img-top" alt="Roommates">
                <div class="card-body">
                    <h5 class="card-title">Roommates</h5>
                    <p class="card-text texto-secundario">
                        One dorm. Zero boundaries.
                    </p>
                    <a href="/post" class="btn btn-amarillo w-100">Ver más</a>
                </div>
            </div>
        </div>

        <div class="col-6 col-md-4 col-lg-3">
            <div class="card card-estreno h-100">
                <img src="{{ asset('img/estrenos/pizzamovie.jpg') }}" class="card-img-top" alt="Pizza Movie">
                <div class="card-body">
                    <h5 class="card-title">Pizza Movie</h5>
                    <p class="card-text texto-secundario">
                        College is a trip.
                    </p>
                    <a href="/post" class="btn btn-amarillo w-100">Ver más</a>
                </div>
            </div>
        </div>

    </div>
</div>
```

</section>

@endsection
