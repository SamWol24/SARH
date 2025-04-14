@extends('layouts.app')

@section('content')
<div class="container text-white">
    <h2 class="mb-4">Lista de Departamentos</h2>
    <a href="{{ route('departamentos.create') }}" class="btn btn-primary mb-3">➕ Agregar Departamento</a>

    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Ubicación</th>
                <th>Número de Teléfono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($departamentos as $departamento)
            <tr>
                <td>{{ $departamento->id }}</td>
                <td>{{ $departamento->nombre }}</td>
                <td>{{ $departamento->ubicación }}</td>
                <td>{{ $departamento->número_telefono }}</td>
                <td>
                    <a href="{{ route('departamentos.edit', $departamento->id) }}" class="btn btn-warning btn-sm">✏️ Editar</a>
                    <form action="{{ route('departamentos.destroy', $departamento->id) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar este departamento?')">🗑️ Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection