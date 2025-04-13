@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Departamento</h1>

    <div class="mb-3">
        <strong>Nombre:</strong> {{ $departamento->nombre }}
    </div>

    <a href="{{ route('departamentos.index') }}" class="btn btn-primary">Volver</a>
</div>
@endsection
