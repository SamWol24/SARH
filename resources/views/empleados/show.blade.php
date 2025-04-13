@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h3>Detalle del Empleado</h3>
        </div>
        <div class="card-body">
            <p><strong>Nombre:</strong> {{ $empleado->nombre }}</p>
            <p><strong>Apellido:</strong> {{ $empleado->apellido }}</p>
            <p><strong>Posición:</strong> {{ $empleado->posicion }}</p>
            <p><strong>Departamento:</strong> {{ $empleado->departamento->nombre }}</p>
            <p><strong>Fecha de Contratación:</strong> {{ $empleado->fecha_contratacion }}</p>
            <p><strong>Salario:</strong> ${{ number_format($empleado->salario, 2) }}</p>
        </div>
        <div class="card-footer d-flex justify-content-end">
            <a href="{{ route('empleados.index') }}" class="btn btn-secondary">Volver</a>
        </div>
    </div>
</div>
@endsection
