<?php

namespace App\Http\Controllers;

use App\Models\Asistencia;
use App\Models\Empleado;
use Illuminate\Http\Request;

class AsistenciaController extends Controller
{
      /**
     * Constructor para aplicar el middleware de autenticación
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $asistencias = Asistencia::with('empleado')->get();
        return view('asistencias.index', compact('asistencias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $empleados = Empleado::all();
        return view('asistencias.create', compact('empleados'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'empleado_id' => 'required|exists:empleados,id',
            'fecha' => 'required|date',
            'hora_entrada' => 'required',
            'hora_salida' => 'nullable',
        ]);

        Asistencia::create($request->all());

        return redirect()->route('asistencias.index')
            ->with('success', 'Registro de asistencia creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Asistencia $asistencia)
    {
        return view('asistencias.show', compact('asistencia'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Asistencia $asistencia)
    {
        $empleados = Empleado::all();
        return view('asistencias.edit', compact('asistencia', 'empleados'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Asistencia $asistencia)
    {
        $request->validate([
            'empleado_id' => 'required|exists:empleados,id',
            'fecha' => 'required|date',
            'hora_entrada' => 'required',
            'hora_salida' => 'nullable',
        ]);

        $asistencia->update($request->all());

        return redirect()->route('asistencias.index')
            ->with('success', 'Registro de asistencia actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Asistencia $asistencia)
    {
        $asistencia->delete();

        return redirect()->route('asistencias.index')
            ->with('success', 'Registro de asistencia eliminado exitosamente.');
    }
}
