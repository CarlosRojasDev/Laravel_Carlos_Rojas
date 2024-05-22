@extends('layouts.app')
@section('content')
    <div class="col-7">
        <h1>Detalles de departamento</h1>

            <div class="mb-3 row">
                <label for="input0" class="col-sm-2 col-form-label">Id</label>
                <div class="col-sm-10">
                <input type="text" name="nombre" class="form-control" id="input0" value="{{$departamento->id}}" disabled readonly>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="input1" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-10">
                <input type="text" name="nombre" class="form-control" id="input1" value="{{$departamento->Nombre_Departamento}}" disabled>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="input2" class="col-sm-2 col-form-label">Telefono</label>
                <div class="col-sm-10">
                <input type="text" name="telefono" class="form-control" id="input2" value="{{$departamento->Telefono}}" disabled>
                </div>
            </div>
            <div class="mb-3 row d-flex align-items-center">
                <label for="input3" class="col-sm-2 col-form-label">Número Empleados</label>
                <div class="col-sm-10">
                <input type="text" name="numero_empleados" class="form-control" id="input3" value="{{$departamento->Numero_empleados}}" disabled>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inpu4" class="col-sm-2 col-form-label">Gerente</label>
                <div class="col-sm-10">
                <input type="text" name="gerente" class="form-control" id="input4" value="{{$departamento->Gerente}}" disabled>
                </div>
            </div>            
            <div class="mb-3 d-flex justify-content-between">
                <a href="/departamentos">Return</a>
                <div class="d-flex" style="gap: 5px;">
                <div>
                    <a class="btn btn-secondary" href="{{ route('departamentos.edit', $departamento->id) }}">Edit</a>
                </div>
                <form action="{{ route('departamentos.destroy', $departamento->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button 
                    class="btn btn-danger" 
                    type="submit" 
                    onclick="return confirm('El registro se eliminara de forma permanente. \n \n Desea continuar?')">Delete
                    </button>
                </form>         
            </div>
            </div>
        
        @if(session('success'))        
        <div class="alert alert-dismissible fade show alerta" role="alert">
            <div class="card col-3">
            <span class="">{{session('success')}}</span>
            <button type="button" class="btn-close cerrar" data-bs-dismiss="alert" aria-label="Close">Ok</button>
            </div>            
        </div>
        @endif
    </div>    
@endsection