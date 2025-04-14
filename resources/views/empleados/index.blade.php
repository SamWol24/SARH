@extends('layouts.app')

@section('content')
<div class="container text-white">
    <h2 class="mb-4">Lista de Empleados</h2>
    <a href="{{ route('empleados.create') }}" class="btn btn-primary mb-3">➕ Agregar Empleado</a>

    <table class="table table-dark table-hover text-center">
        <thead class="table-light">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Posición</th>
                <th>Departamento</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($empleados as $empleado)
            <tr>
                <td>{{ $empleado->id }}</td>
                <td>{{ $empleado->nombre }}</td>
                <td>{{ $empleado->apellido }}</td>
                <td>{{ $empleado->posición }}</td>
                <td>{{ $empleado->departamento->nombre }}</td>
                <td>
                    <a href="{{ route('empleados.edit', $empleado->id) }}" class="btn btn-warning btn-sm">✏️ Editar</a>
                    <form action="{{ route('empleados.destroy', $empleado->id) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar este empleado?')">🗑️ Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection