@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h3>Detalle de Asistencia</h3>
        </div>
        <div class="card-body">
            <p><strong>Empleado:</strong> {{ $asistencia->empleado->nombre }} {{ $asistencia->empleado->apellido }}</p>
            <p><strong>Fecha:</strong> {{ $asistencia->fecha }}</p>
            <p><strong>Hora de Entrada:</strong> {{ $asistencia->hora_entrada }}</p>
            <p><strong>Hora de Salida:</strong> {{ $asistencia->hora_salida ?? 'No registrada' }}</p>
        </div>
        <div class="card-footer d-flex justify-content-end">
            <a href="{{ route('asistencias.index') }}" class="btn btn-secondary">Volver</a>
        </div>
    </div>
</div>
@endsection
