<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\AsistenciaController;

Route::get('/', function () {
    return view('welcome');
});
//rutas protegida con autenticacion
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    Route::resource('departamentos', DepartamentoController::class);
    Route::resource('empleados', EmpleadoController::class);
    Route::resource('asistencias', AsistenciaController::class);

    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
});

require __DIR__.'/auth.php';
