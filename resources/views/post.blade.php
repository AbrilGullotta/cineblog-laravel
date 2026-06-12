@extends('layouts.app')

@section('title', 'Post')

@section('content')

<section class="post-section py-5">
    <div class="container post-container">

```
    <div class="mb-4">
        <p class="texto-amarillo text-uppercase fw-semibold mb-2">Reseña</p>
        <h1 class="fw-bold">The Devil Wears Prada 2</h1>
    </div>

    <div class="row g-4">

        <div class="col-lg-4">
            <img src="{{ asset('img/estrenos/devil.jpg') }}" class="img-fluid post-poster" alt="The Devil Wears Prada 2">
        </div>

        <div class="col-lg-8">

            <div class="d-flex align-items-center mb-4">
                <img src="{{ asset('img/usuarios/avatar2.jpg') }}" class="foto-perfil me-3" alt="Mica">
                <div>
                    <p class="mb-0 fw-bold">Mica</p>
                    <p class="mb-0 texto-secundario">19 de abril de 2026</p>
                </div>
            </div>

            <div class="post-content">

                <p>
                    The Devil Wears Prada 2 retoma la historia años después, en un mundo de la moda completamente transformado por lo digital.
                </p>

                <p>
                    Andy ya no es la misma asistente insegura, y su reencuentro con ese universo la obliga a enfrentarse nuevamente a decisiones clave.
                </p>

                <p>
                    Meryl Streep vuelve a construir un personaje elegante, intimidante y magnético que domina cada escena.
                </p>

                <p>
                    La película apuesta por una evolución más madura, sin perder el estilo que hizo memorable a la original.
                </p>

            </div>

        </div>
    </div>

    <div class="comentarios mt-5">

        <h2 class="mb-4">Comentarios</h2>

        <div class="comentario-item mb-4">
            <div class="d-flex align-items-center mb-2">
                <img src="{{ asset('img/usuarios/avatar1.jpg') }}" class="foto-perfil me-2" alt="Marcos">
                <strong>Marcos</strong>
            </div>
            <p class="texto-secundario mb-0">
                Miranda sigue siendo lo mejor de la película.
            </p>
        </div>

        <div class="comentario-item mb-4">
            <div class="d-flex align-items-center mb-2">
                <img src="{{ asset('img/usuarios/avatar3.jpg') }}" class="foto-perfil me-2" alt="Araceli">
                <strong>Araceli</strong>
            </div>
            <p class="texto-secundario mb-0">
                Me gustó más de lo que esperaba, aunque es distinta a la primera.
            </p>
        </div>

        <div class="mt-4">
            <h3 class="mb-3">Dejá tu comentario</h3>
            <textarea class="form-control mb-3" rows="3" placeholder="Escribí tu comentario"></textarea>
            <button class="btn btn-amarillo">Publicar</button>
        </div>

    </div>

</div>
```

</section>

@endsection
