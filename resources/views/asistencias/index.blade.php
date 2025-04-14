@extends('layouts.app')

@section('content')
<div class="container text-white">
    <h2 class="mb-4">Registro de Asistencias</h2>
    <a href="{{ route('asistencias.create') }}" class="btn btn-primary mb-3">➕ Registrar Asistencia</a>

    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Empleado</th>
                <th>Fecha</th>
                <th>Hora Entrada</th>
                <th>Hora Salida</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($asistencias as $asistencia)
            <tr>
                <td>{{ $asistencia->id }}</td>
                <td>{{ $asistencia->empleado->nombre }} {{ $asistencia->empleado->apellido }}</td>
                <td>{{ $asistencia->fecha }}</td>
                <td>{{ $asistencia->hora_entrada }}</td>
                <td>{{ $asistencia->hora_salida }}</td>
                <td>
                    <a href="{{ route('asistencias.edit', $asistencia->id) }}" class="btn btn-warning btn-sm">✏️ Editar</a>
                    <form action="{{ route('asistencias.destroy', $asistencia->id) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar este registro?')">🗑️ Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection