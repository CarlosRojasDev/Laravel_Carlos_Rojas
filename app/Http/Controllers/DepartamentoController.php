<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departamentos = Departamento::all();
        return view('departamento.index' ,compact('departamentos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('departamento.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $departamento = new Departamento();
        $departamento->Nombre_Departamento = $request->nombre;
        $departamento->Telefono = $request->telefono;
        $departamento->Numero_empleados = $request->numero_empleados;
        $departamento->Gerente = $request->gerente;

        $departamento->save();

        return redirect()->route('departamentos.create')->with('success','Registro guardado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $departamento = Departamento::find($id);
        return view('departamento.detalle',compact('departamento'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $departamento = Departamento::find($id);
        return view('departamento.editar',compact('departamento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $departamento = Departamento::find($id);
        $departamento->Nombre_Departamento = $request->nombre;
        $departamento->Telefono = $request->telefono;
        $departamento->Numero_empleados = $request->numero_empleados;
        $departamento->Gerente = $request->gerente;
        $departamento->update();

        return redirect()->route('departamentos.show',$departamento->id)->with('success','Registro actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $departamento = Departamento::find($id);
        $departamento->delete();

        return redirect()->route('departamentos.index')->with('success','Registro eliminado');
    }
}
