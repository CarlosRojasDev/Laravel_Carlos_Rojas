@extends('layouts.app')

@section('content')
    <h1>Departamentos</h1>
    <a class="btn btn-primary mb-3" href="/departamentos/create">Crear nuevo</a>
    <div class="container cont-table">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre Departamento</th>
                    <th>Teléfono</th>
                    <th># Empleados</th>
                    <th>Gerente</th>
                    <th>Opción</th>
                </tr>
            </thead>
            <tbody>
                @foreach($departamentos as $departamento)
                <tr>
                    <td>{{$departamento->id}}</td>
                    <td>{{$departamento->Nombre_Departamento}}</td>
                    <td>{{$departamento->Telefono}}</td>
                    <td>{{$departamento->Numero_empleados}}</td>
                    <td>{{$departamento->Gerente}}</td>
                    <td><a href="{{ route('departamentos.show', $departamento->id) }}">Details</a></td>
                </tr>
                @endforeach
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
