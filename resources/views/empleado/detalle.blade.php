@extends('layouts.app')
@section('content')
    <div class="col-6">
        <h1>Detalles de empleado</h1>       

        <div class="mb-3 row">
            <label for="inputid" class="col-sm-2 col-form-label">Id</label>
            <div class="col-sm-10">
            <input type="text" name="nombre" class="form-control" id="inputid" value="{{$empleado->id}}" disabled>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputName" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
            <input type="text" name="nombre" class="form-control" id="inputName" value="{{$empleado->Nombre}}" disabled>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputLastName" class="col-sm-2 col-form-label">Apellido</label>
            <div class="col-sm-10">
            <input type="text" name="apellido" class="form-control" id="inputLastName" value="{{$empleado->Apellido}}" disabled>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputIdentification" class="col-sm-2 col-form-label">Identificación</label>
            <div class="col-sm-10">
            <input type="text" name="identificacion" class="form-control" id="inputIdentification" value="{{$empleado->Identificacion}}" disabled>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
            <input type="text" name="email" class="form-control" id="inputEmail" value="{{$empleado->Email}}" disabled>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputSalary" class="col-sm-2 col-form-label">Salario</label>
            <div class="col-sm-10">
            <input type="text" name="salario" class="form-control" id="inputSalary" value="{{$empleado->Salario}}" disabled>
            </div>
        </div>
        <div class="mb-3 d-flex justify-content-between">
            <a href="/empleados">return</a>
            <div class="d-flex" style="gap: 5px;">
                <div>
                    <a class="btn btn-secondary" href="{{ route('empleados.edit', $empleado->id) }}">Edit</a>
                </div>
                <form action="{{ route('empleados.destroy', $empleado->id) }}" method="POST">
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
