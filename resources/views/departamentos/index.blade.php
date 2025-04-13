@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Departamentos</h1>
    <a href="{{ route('departamentos.create') }}" class="btn btn-primary mb-3">Nuevo Departamento</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($departamentos as $departamento)
            <tr>
                <td>{{ $departamento->nombre }}</td>
                <td>
                    <a href="{{ route('departamentos.edit', $departamento->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('departamentos.destroy', $departamento->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('¿Eliminar?')" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
