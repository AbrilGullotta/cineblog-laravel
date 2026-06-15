<x-guest-layout>
    <div class="card shadow">
        <div class="card-header bg-dark text-white text-center">
            <h4>Iniciar Sesión</h4>
        </div>
        <div class="card-body p-4">

            @if (session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                        id="email" name="email" value="{{ old('email') }}" required autofocus>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                        id="password" name="password" required>
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="remember_me" name="remember">
                    <label class="form-check-label" for="remember_me">Recordarme</label>
                </div>

                <div class="d-flex justify-content-between align-items-center">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-decoration-none">
                            ¿Olvidaste tu contraseña?
                        </a>
                    @endif
                    <button type="submit" class="btn btn-danger">Ingresar</button>
                </div>

                <hr>
                <div class="text-center">
                    <a href="{{ route('register') }}" class="text-decoration-none">
                        ¿No tenés cuenta? Registrate
                    </a>
                </div>

            </form>
        </div>
    </div>
</x-guest-layout>