@extends('adminlte::page')

@section('title', 'Admin Panel')

@section('content_header')
    <h1>Lista de Tipo de Herramienta</h1>
@stop

@section('content')
@if (session('info'))
    <div class="alert alert-success">
     <strong>{{session('info')}}</strong>
    </div>
@endif
    <div class="card">
        <div class="card-header">
               <a class="btn btn-secondary" href="{{route('admin.tags.create')}}">Agregar</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
            <thead>
                 <th>ID</th>
                 <th>Nombre</th>
                 <th colspan="2"></th>
            </thead>
            <tbody>
                @foreach ($tags as $tag)
                    <tr>
                        <td>{{$tag->id}}</td>
                        <td>{{$tag->name}}</td>
                        <td width="10px"><a class="btn btn-warning" href="{{route('admin.tags.edit', $tag)}}">Editar</a></td>
                        <td width="10px">
                            <form action="{{route('admin.tags.destroy', $tag)}}" method="POST">
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

