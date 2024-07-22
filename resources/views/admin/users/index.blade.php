@extends('adminlte::page')

@section('title', 'Admin Panel')

@section('content_header')
    <h1>Lista usuarios</h1>
@stop

@section('content')
 @livewire('admin.user-index')
@stop
