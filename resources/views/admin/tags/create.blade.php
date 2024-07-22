@extends('adminlte::page')

@section('title', 'Admin Panel')

@section('content_header')
    <h1>Crear Tipo de Herramienta</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.tags.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input placeholder="Ingrese el nombre del Taller" type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                    @error('name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                    <label for="name">Slug</label>
                    <input  readonly placeholder="Ingrese el nombre del Slug" type="text" class="form-control" id="slug" name="slug" value="{{ old('slug') }}">   
                    @error('slug')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
                <button type="submit" class="btn btn-primary">Crear</button>
            </form>
        </div>
    </div>
@stop

@section('js')
   <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3.0/jquery.stringToSlug.min.js')}}"></script>
   <script>
$(document).ready( function() {
    $("#name").stringToSlug({
        setEvents: 'keyup keydown blur',
        getPut: '#slug',
        space: '-',
    });
});
   </script>
@endsection