@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Registrar Asistencia</h1>

    <form action="{{ route('asistencias.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="empleado_id" class="form-label">Empleado</label>
            <select name="empleado_id" class="form-control" required>
                <option value="">Seleccione un empleado</option>
                @foreach($empleados as $empleado)
                    <option value="{{ $empleado->id }}">{{ $empleado->nombre }} {{ $empleado->apellido }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="fecha" class="form-label">Fecha</label>
            <input type="date" name="fecha" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="hora_entrada" class="form-label">Hora de Entrada</label>
            <input type="time" name="hora_entrada" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="hora_salida" class="form-label">Hora de Salida (opcional)</label>
            <input type="time" name="hora_salida" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('asistencias.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
