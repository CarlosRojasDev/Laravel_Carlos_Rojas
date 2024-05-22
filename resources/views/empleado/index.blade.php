@extends('layouts.app')

@section('content')
    <h1>Empleados</h1>
    <a class="btn btn-primary mb-3" href="/empleados/create">Crear nuevo</a>
    <div class="container cont-table">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Identificaión</th>
                    <th>Email</th>
                    <th>Salario</th>
                    <th>Opción</th>
                </tr>
            </thead>
            <tbody>
                @if(sizeof($empleados) > 0)
                    @foreach($empleados as $empleado)
                    <tr>
                    <td>{{$empleado->id}}</td>
                    <td>{{$empleado->Nombre}}</td>
                    <td>{{$empleado->Apellido}}</td>
                    <td>{{$empleado->Identificacion}}</td>
                    <td>{{$empleado->Email}}</td>
                    <td>{{$empleado->Salario}}</td>                    
                    <td><a href="/empleados/{{$empleado->id}}">Details</a></td>
                    </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="7" class="text-center">No hay registros</td>
                    </tr>
                
                @endif
            </tbody>
        </table>
    </div>
    @if(session('success'))        
    <div class="alert alert-dismissible fade show alerta" role="alert">
        <div class="card col-3">
        <span class="">{{session('success')}}</span>
        <button type="button" class="btn-close cerrar" data-bs-dismiss="alert" aria-label="Close">Ok</button>
        </div>            
    </div>
    @endif
@endsection
