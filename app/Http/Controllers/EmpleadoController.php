<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empleados = Empleado::all();
        return view('empleado.index', compact('empleados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('empleado.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $empleado = new Empleado();
        $empleado->Nombre = $request->input('nombre');
        $empleado->Apellido = $request->input('apellido');
        $empleado->Identificacion = $request->input('identificacion');
        $empleado->Email = $request->input('email');
        $empleado->Salario = $request->input('salario');
        $empleado->save();

        return redirect()->route('empleados.create')->with('success','Registro guardado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $empleado = Empleado::find($id);
        return view('empleado.detalle',compact('empleado'));        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $empleado = Empleado::find($id);
        return view('empleado.editar',compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $empleado = Empleado::find($id);
        $empleado->Nombre = $request->input('nombre');
        $empleado->Apellido = $request->input('apellido');
        $empleado->Identificacion = $request->input('identificacion');
        $empleado->Email = $request->input('email');
        $empleado->Salario = $request->input('salario');
        $empleado->update();
        return redirect()->route('empleados.show',$empleado->id)->with('success','Registro actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $empleado = Empleado::find($id);
        $empleado->delete();
        return redirect()->route('empleados.index')->with('success','Registro eliminado');
    }
}
