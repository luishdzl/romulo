@extends('adminlte::page')

@section('title', 'INCORPORAR/DESINCORPORAR')

@section('content_header')
    <h1>Lista de Inventario</h1>
@stop


@section('content')
@if (session('info'))
    <div class="alert alert-success">
     <strong>{{session('info')}}</strong>
    </div>
@endif
    <div class="card">
        <div class="card-header">
               <a class="btn btn-secondary" href="{{route('admin.inventories.create')}}">Agregar</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
            <thead>
                 <th>ID</th>
                 <th>Nombre de la herramienta</th>
                 <th>Taller</th>
                 <th>Cantidad</th>
                 <th>Fecha</th>
                 <th colspan="2"></th>
            </thead>
            <tbody>
                @foreach ($inventories as $inventory)
                    <tr>
                        <td>{{$inventory->id}}</td>
                        <td>{{$inventory->post_name}}</td>
                        <td>{{$inventory->category_name}}</td>
                        <td>{{$inventory->numeric_value}}</td>
                        <td>{{$inventory->updated_at}}</td>
                        <td width="10px"><a class="btn btn-warning" href="{{route('admin.inventories.edit', $inventory)}}">Editar</a></td>
                        <td width="10px">
                            <form action="{{route('admin.inventories.destroy', $inventory)}}" method="POST">
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

