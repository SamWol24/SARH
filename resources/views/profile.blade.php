@extends('layouts.app')

@section('content')
    <h1>Perfil de {{ auth()->user()->name }}</h1>
    <a href="{{ route('profile.edit') }}">Editar perfil</a>

    <form action="{{ route('profile.destroy') }}" method="POST" style="margin-top: 20px;">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('¿Estás seguro de que quieres eliminar tu cuenta?')" class="btn btn-danger">
            Eliminar cuenta
        </button>
    </form>
@endsection