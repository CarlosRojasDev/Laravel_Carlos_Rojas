@extends('layouts.app')
@section('content')
    <div class="col-6">
        <h1>Crear empleado</h1>
        <form action="/empleados" method="post"> 
            @csrf

            <div class="mb-3 row">
                <label for="inputName" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-10">
                <input type="text" name="nombre" class="form-control" id="inputName">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputLastName" class="col-sm-2 col-form-label">Apellido</label>
                <div class="col-sm-10">
                <input type="text" name="apellido" class="form-control" id="inputLastName">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputIdentification" class="col-sm-2 col-form-label">Identificación</label>
                <div class="col-sm-10">
                <input type="text" name="identificacion" class="form-control" id="inputIdentification">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                <input type="text" name="email" class="form-control" id="inputEmail">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputSalary" class="col-sm-2 col-form-label">Salario</label>
                <div class="col-sm-10">
                <input type="text" name="salario" class="form-control" id="inputSalary">
                </div>
            </div>
            <div class="mb-3 d-flex justify-content-between">
                <a href="/empleados">return</a>
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