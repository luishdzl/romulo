@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
     <a class="btn btn-secondary btn-sm float-right" href="{{route('admin.herramientas.create')}}">Crear Nueva Herramienta</a>
    <h1>Listado de Herramientas</h1>
@stop

@section('content')
@if (session('info'))
    <div class="alert alert-success">
     <strong>{{session('info')}}</strong>
    </div>
@endif
@livewire('admin.post-index')


@stop
