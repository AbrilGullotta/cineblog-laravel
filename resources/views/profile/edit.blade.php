@extends('layouts.app')
@section('content')
    <div class="container py-4">

        <div class="row justify-content-center">
            <div class="col-md-8">

                {{-- Datos del perfil --}}
                <div class="card shadow mb-4">
                    <div class="card-header bg-dark text-white">
                        <h5 class="mb-0">Mi Perfil</h5>
                    </div>
                    <div class="card-body p-4">
                        <form method="POST" action="{{ route('profile.update') }}">
                            @csrf
                            @method('PATCH')

                            <div class="mb-3">
                                <label for="name" class="form-label">Nombre</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    id="name" name="name" value="{{ old('name', $user->name) }}" required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    id="email" name="email" value="{{ old('email', $user->email) }}" required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="d-flex justify-content-end">
                                @if (session('status') === 'profile-updated')
                                    <span class="text-success me-3 align-self-center">Guardado!</span>
                                @endif
                                <button type="submit" class="btn btn-danger">Guardar cambios</button>
                            </div>

                        </form>
                    </div>
                </div>

                {{-- Cambiar contraseña --}}
                <div class="card shadow mb-4">
                    <div class="card-header bg-dark text-white">
                        <h5 class="mb-0">Cambiar Contraseña</h5>
                    </div>
                    <div class="card-body p-4">
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="current_password" class="form-label">Contraseña actual</label>
                                <input type="password" class="form-control @error('current_password') is-invalid @enderror"
                                    id="current_password" name="current_password">
                                @error('current_password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Nueva contraseña</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    id="password" name="password">
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Confirmar contraseña</label>
                                <input type="password" class="form-control"
                                    id="password_confirmation" name="password_confirmation">
                            </div>

                            <div class="d-flex justify-content-end">
                                @if (session('status') === 'password-updated')
                                    <span class="text-success me-3 align-self-center">Actualizada!</span>
                                @endif
                                <button type="submit" class="btn btn-danger">Actualizar contraseña</button>
                            </div>

                        </form>
                    </div>
                </div>

                {{-- Eliminar cuenta --}}
                <div class="card shadow border-danger">
                    <div class="card-header bg-danger text-white">
                        <h5 class="mb-0">Eliminar Cuenta</h5>
                    </div>
                    <div class="card-body p-4">
                        <p class="text-muted">Una vez eliminada la cuenta no hay vuelta atrás.</p>
                        <form method="POST" action="{{ route('profile.destroy') }}">
                            @csrf
                            @method('DELETE')

                            <div class="mb-3">
                                <label for="delete_password" class="form-label">Confirmá tu contraseña</label>
                                <input type="password" class="form-control @error('password', 'userDeletion') is-invalid @enderror"
                                    id="delete_password" name="password">
                                @error('password', 'userDeletion')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-danger">Eliminar cuenta</button>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection