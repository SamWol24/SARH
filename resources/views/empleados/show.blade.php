@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalle del Empleado</h1>

    <div><strong>Nombre:</strong> {{ $empleado->nombre }}</div>
    <div><strong>Apellido:</strong> {{ $empleado->apellido }}</div>
    <div><strong>Departamento:</strong> {{ $empleado->departamento->nombre }}</div>
    <div><strong>Cargo:</strong> {{ $empleado->cargo }}</div>

    <a href="{{ route('empleados.index') }}" class="btn btn-primary mt-3">Volver</a>
</div>
@endsection
