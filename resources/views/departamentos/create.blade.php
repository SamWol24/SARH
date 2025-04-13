@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Departamento</h1>

    <form action="{{ route('departamentos.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="nombre">Nombre del Departamento</label>
            <input type="text" id="nombre" name="nombre" class="form-control" required>
        </div>

        <button class="btn btn-success">Guardar</button>
        <a href="{{ route('departamentos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
