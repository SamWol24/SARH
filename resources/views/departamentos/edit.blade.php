@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Departamento</h1>

    <form action="{{ route('departamentos.update', $departamento->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nombre">Nombre del Departamento</label>
            <input type="text" id="nombre" name="nombre" value="{{ $departamento->nombre }}" class="form-control" required>
        </div>

        <button class="btn btn-success">Actualizar</button>
        <a href="{{ route('departamentos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
