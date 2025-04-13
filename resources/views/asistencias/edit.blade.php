@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Asistencia</h1>

    <form action="{{ route('asistencias.update', $asistencia->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="empleado_id" class="form-label">Empleado</label>
            <select name="empleado_id" class="form-control" required>
                @foreach($empleados as $empleado)
                    <option value="{{ $empleado->id }}" {{ $empleado->id == $asistencia->empleado_id ? 'selected' : '' }}>
                        {{ $empleado->nombre }} {{ $empleado->apellido }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="fecha" class="form-label">Fecha</label>
            <input type="date" name="fecha" class="form-control" value="{{ $asistencia->fecha }}" required>
        </div>

        <div class="mb-3">
            <label for="hora_entrada" class="form-label">Hora de Entrada</label>
            <input type="time" name="hora_entrada" class="form-control" value="{{ $asistencia->hora_entrada }}" required>
        </div>

        <div class="mb-3">
            <label for="hora_salida" class="form-label">Hora de Salida</label>
            <input type="time" name="hora_salida" class="form-control" value="{{ $asistencia->hora_salida }}">
        </div>

        <button type="submit" class="btn btn-success">Actualizar</button>
        <a href="{{ route('asistencias.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
