@extends('adminlte::page')

@section('title', 'Admin Panel')

@section('content_header')
    <h1>Configuracion Avanzada</h1>
@stop

@section('content')
    <p>Bienvenido al panel de configuracion avanzada.</p>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop