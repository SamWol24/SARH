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
    
    Route::resource('departamentos', DepartamentoController::class)->middleware('auth');
    Route::resource('empleados', EmpleadoController::class)->middleware('auth');
    Route::resource('asistencias', AsistenciaController::class)->middleware('auth');

    // Agregar la ruta para el perfil
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');  
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::patch('/profile/password', [ProfileController::class, 'updatePassword'])->name('profile.update-password');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
