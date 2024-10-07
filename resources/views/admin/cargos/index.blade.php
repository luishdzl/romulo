@extends('adminlte::page')

@section('title', 'Cargos')

@section('content_header')
    <h1>Lista de Cargos</h1>
@stop


@section('content')
@if (session('info'))
    <div class="alert alert-success">
     <strong>{{session('info')}}</strong>
    </div>
@endif
    <div class="card">
        <div class="card-header">
               <a class="btn btn-secondary" href="{{route('admin.cargos.create')}}">Agregar</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
            <thead>
                <th>Nombre</th>
                 <th>CI del Persona</th>
                 <th>Taller</th>
                 <th>Cargo</th>
                 <th colspan="2"></th>
            </thead>
            <tbody>
                @foreach ($cargos as $cargo)
                    <tr>
                        <td>{{$cargo->persona}}</td>
                        <td>{{$cargo->cedula}}</td>
                        <td>{{$cargo->taller}}</td>
                        <td>{{$cargo->cargo}}</td>
                        <td width="10px"><a class="btn btn-warning" href="{{route('admin.cargos.edit', $cargo)}}">Editar</a></td>
                        <td width="10px">
                            <form action="{{route('admin.cargos.destroy', $cargo)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
@stop

