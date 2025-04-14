@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4 text-white">Agregar Nuevo Empleado</h2>
    <div class="card bg-dark text-white p-4">
        <form action="{{ route('empleados.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nombre:</label>
                <input type="text" name="nombre" class="form-control bg-secondary text-white">
            </div>

            <div class="mb-3">
                <label class="form-label">Apellido:</label>
                <input type="text" name="apellido" class="form-control bg-secondary text-white">
            </div>

            <div class="mb-3">
                <label class="form-label">Posición:</label>
                <input type="text" name="posición" class="form-control bg-secondary text-white">
            </div>

            <div class="mb-3">
                <label class="form-label">Departamento:</label>
                <select name="departamento_id" class="form-control bg-secondary text-white">
                    @foreach ($departamentos as $departamento)
                        <option value="{{ $departamento->id }}">{{ $departamento->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-success w-100">✔️ Guardar</button>
        </form>
    </div>
</div>
@endsection