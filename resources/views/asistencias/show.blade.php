@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalle de Asistencia</h1>

    <div class="mb-3">
        <strong>Empleado:</strong> {{ $asistencia->empleado->nombre }} {{ $asistencia->empleado->apellido }}
    </div>
    <div class="mb-3">
        <strong>Fecha:</strong> {{ $asistencia->fecha }}
    </div>
    <div class="mb-3">
        <strong>Hora de Entrada:</strong> {{ $asistencia->hora_entrada }}
    </div>
    <div class="mb-3">
        <strong>Hora de Salida:</strong> {{ $asistencia->hora_salida ?? '---' }}
    </div>

    <a href="{{ route('asistencias.index') }}" class="btn btn-primary">Volver</a>
</div>
@endsection
