@extends('layouts.app')
@section('content')
    <div class="col-6">
        <h1>Editar empleado</h1>
        <form action="/empleados/{{$empleado->id}}" method="post"> 
            @csrf
            @method('PUT')
            <div class="mb-3 row">
            <label for="inputid" class="col-sm-2 col-form-label">Id</label>
            <div class="col-sm-10">
            <input type="text" name="nombre" class="form-control-plaintext" id="inputid" value="{{$empleado->id}}">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputName" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
            <input type="text" name="nombre" class="form-control" id="inputName" value="{{$empleado->Nombre}}">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputLastName" class="col-sm-2 col-form-label">Apellido</label>
            <div class="col-sm-10">
            <input type="text" name="apellido" class="form-control" id="inputLastName" value="{{$empleado->Apellido}}">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputIdentification" class="col-sm-2 col-form-label">Identificación</label>
            <div class="col-sm-10">
            <input type="text" name="identificacion" class="form-control" id="inputIdentification" value="{{$empleado->Identificacion}}">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
            <input type="text" name="email" class="form-control" id="inputEmail" value="{{$empleado->Email}}">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputSalary" class="col-sm-2 col-form-label">Salario</label>
            <div class="col-sm-10">
            <input type="text" name="salario" class="form-control" id="inputSalary" value="{{$empleado->Salario}}">
            </div>
        </div>
            <div class="mb-3 d-flex justify-content-between">
                <a href="/empleados">Return</a>                
                <button class="btn btn-success" type="submit">Actualizar</button>
            </div>            
        </form>        
    </div>    
@endsection