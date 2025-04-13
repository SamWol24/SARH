@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Asistencias</h1>
    <a href="{{ route('asistencias.create') }}" class="btn btn-primary mb-3">Registrar Asistencia</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Empleado</th>
                <th>Fecha</th>
                <th>Hora Entrada</th>
                <th>Hora Salida</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($asistencias as $asistencia)
            <tr>
                <td>{{ $asistencia->empleado->nombre }} {{ $asistencia->empleado->apellido }}</td>
                <td>{{ $asistencia->fecha }}</td>
                <td>{{ $asistencia->hora_entrada }}</td>
                <td>{{ $asistencia->hora_salida ?? '---' }}</td>
                <td>
                    <a href="{{ route('asistencias.show', $asistencia->id) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('asistencias.edit', $asistencia->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('asistencias.destroy', $asistencia->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('¿Estás seguro de eliminar?')" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
