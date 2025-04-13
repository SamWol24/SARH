@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Empleado</h1>

    <form action="{{ route('empleados.update', $empleado->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nombre</label>
            <input type="text" name="nombre" value="{{ $empleado->nombre }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Apellido</label>
            <input type="text" name="apellido" value="{{ $empleado->apellido }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Departamento</label>
            <select name="departamento_id" class="form-control" required>
                @foreach($departamentos as $departamento)
                    <option value="{{ $departamento->id }}" {{ $departamento->id == $empleado->departamento_id ? 'selected' : '' }}>
                        {{ $departamento->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Cargo</label>
            <input type="text" name="cargo" value="{{ $empleado->cargo }}" class="form-control" required>
        </div>

        <button class="btn btn-success">Actualizar</button>
        <a href="{{ route('empleados.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
