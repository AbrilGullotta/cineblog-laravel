<x-guest-layout>
    <div class="card shadow">
        <div class="card-header bg-dark text-white text-center">
            <h4>Recuperar Contraseña</h4>
        </div>
        <div class="card-body p-4">

            <p class="text-muted mb-4">
                Ingresá tu email y te enviamos un link para restablecer tu contraseña.
            </p>

            @if (session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                        id="email" name="email" value="{{ old('email') }}" required autofocus>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-flex justify-content-between align-items-center">
                    <a href="{{ route('login') }}" class="text-decoration-none">Volver al login</a>
                    <button type="submit" class="btn btn-danger">Enviar link</button>