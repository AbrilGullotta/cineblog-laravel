<nav class="navbar navbar-expand-lg navbar-dark bg-black py-3">
    <div class="container">

        <a class="navbar-brand fw-bold fs-3" href="{{ route('inicio') }}">
            ···Cineblog
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContenido">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarContenido">

            <ul class="navbar-nav mx-auto gap-3 text-uppercase fw-semibold">

                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Ingresar</a>
                    </li>
                @endguest

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('categoria.show', 1) }}">Estrenos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('categoria.show', 2) }}">Reseñas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('categoria.show', 3) }}">Noticias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('categoria.show', 4) }}">Eventos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('categoria.show', 5) }}">Recomendaciones</a>
                </li>

                @auth
                    @if(Auth::user()->rol?->nombre === 'admin')
                        <li class="nav-item">
                            <a class="nav-link texto-amarillo" href="{{ route('admin.dashboard') }}">Panel Admin</a>
                        </li>
                    @elseif(Auth::user()->rol?->nombre === 'editor')
                        <li class="nav-item">
                            <a class="nav-link texto-amarillo" href="{{ route('editor.dashboard') }}">Panel Editor</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('dashboard') }}">Mi panel</a>
                        </li>
                    @endif

                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="nav-link btn btn-link text-white">Salir</button>
                        </form>
                    </li>
                @endauth

            </ul>

            <form class="d-flex">
                <input class="form-control form-control-sm" type="search" placeholder="Buscar">
            </form>

        </div>

    </div>
</nav>