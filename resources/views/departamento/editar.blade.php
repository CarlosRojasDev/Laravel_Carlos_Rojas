@extends('layouts.app')
@section('content')
    <div class="col-7">
        <h1>Crear departamento</h1>
        <form action="/departamentos/{{$departamento->id}}" method="post"> 
            @csrf
            @method('PUT')
            <div class="mb-3 row">
                <label for="input0" class="col-sm-2 col-form-label">Id</label>
                <div class="col-sm-10">
                <input type="text" name="nombre" class="form-control-plaintext" id="input0" value="{{$departamento->id}}" readonly>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="input1" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-10">
                <input type="text" name="nombre" class="form-control" id="input1" value="{{$departamento->Nombre_Departamento}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="input2" class="col-sm-2 col-form-label">Telefono</label>
                <div class="col-sm-10">
                <input type="text" name="telefono" class="form-control" id="input2" value="{{$departamento->Telefono}}">
                </div>
            </div>
            <div class="mb-3 row d-flex align-items-center">
                <label for="input3" class="col-sm-2 col-form-label">Número Empleados</label>
                <div class="col-sm-10">
                <input type="text" name="numero_empleados" class="form-control" id="input3" value="{{$departamento->Numero_empleados}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inpu4" class="col-sm-2 col-form-label">Gerente</label>
                <div class="col-sm-10">
                <input type="text" name="gerente" class="form-control" id="input4" value="{{$departamento->Gerente}}">
                </div>
            </div>            
            <div class="mb-3 d-flex justify-content-between">
                <a href="/departamentos">return</a>
                <button class="btn btn-success" type="submit">Actualizar</button>
            </div>
        </form>
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