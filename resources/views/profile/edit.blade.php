@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4 text-dark text-center">Editar Perfil</h2>

    <div class="d-flex flex-column gap-4 align-items-center">

        <div class="card p-4 w-50">
            <h3 class="text-primary text-center mb-3">Actualizar Información</h3>
            <form action="{{ route('profile.update') }}" method="POST">
                @csrf
                @method('PATCH')

                <div class="mb-3">
                    <label class="form-label text-dark">Nombre:</label>
                    <input type="text" name="name" value="{{ auth()->user()->name }}" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label text-dark">Correo Electrónico:</label>
                    <input type="email" name="email" value="{{ auth()->user()->email }}" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary w-100">✔️ Guardar Cambios</button>
            </form>
        </div>

        <div class="card p-4 w-50">
            <h3 class="text-warning text-center mb-3">Cambiar Contraseña</h3>
            <form action="{{ route('profile.update-password') }}" method="POST">
                @csrf
                @method('PATCH')

                <div class="mb-3">
                    <label class="form-label text-dark">Contraseña Actual:</label>
                    <input type="password" name="current_password" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label text-dark">Nueva Contraseña:</label>
                    <input type="password" name="new_password" class="form-control">
                </div>

                <button type="submit" class="btn btn-warning w-100">🔑 Cambiar Contraseña</button>
            </form>
        </div>

        <div class="card p-4 w-50">
            <h3 class="text-danger text-center mb-3">Eliminar Cuenta</h3>
            <form action="{{ route('profile.destroy') }}" method="POST">
                @csrf
                @method('DELETE')

                <p class="text-dark text-center">⚠️ Esta acción no se puede deshacer. ¿Estás seguro?</p>

                <button type="submit" onclick="return confirm('¿Estás seguro de eliminar tu cuenta?')" class="btn btn-danger w-100">
                    🗑️ Eliminar Cuenta
                </button>
            </form>
        </div>

    </div>
</div>
@endsection
