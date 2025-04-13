@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h3>Detalle del Departamento</h3>
        </div>
        <div class="card-body">
            <p><strong>Nombre:</strong> {{ $departamento->nombre }}</p>
            <p><strong>Descripción:</strong> {{ $departamento->descripcion }}</p>
        </div>
        <div class="card-footer d-flex justify-content-end">
            <a href="{{ route('departamentos.index') }}" class="btn btn-secondary">Volver</a>
        </div>
    </div>
</div>
@endsection
