@extends('layouts.app')
@section('content')
    <div class="col-7">
        <h1>Crear departamento</h1>
        <form action="/departamentos" method="post"> 
            @csrf

            <div class="mb-3 row">
                <label for="input1" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-10">
                <input type="text" name="nombre" class="form-control" id="input1">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="input2" class="col-sm-2 col-form-label">Telefono</label>
                <div class="col-sm-10">
                <input type="text" name="telefono" class="form-control" id="input2">
                </div>
            </div>
            <div class="mb-3 row d-flex align-items-center">
                <label for="input3" class="col-sm-2 col-form-label">Número Empleados</label>
                <div class="col-sm-10">
                <input type="text" name="numero_empleados" class="form-control" id="input3">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inpu4" class="col-sm-2 col-form-label">Gerente</label>
                <div class="col-sm-10">
                <input type="text" name="gerente" class="form-control" id="input4">
                </div>
            </div>            
            <div class="mb-3 d-flex justify-content-between">
                <a href="/departamentos">Return</a>
                <button class="btn btn-success" type="submit">Enviar</button>
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