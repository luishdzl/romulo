@extends('adminlte::page')

@section('title', 'Admin Panel')

@section('content_header')
    <h1>Editar</h1>
@stop

@section('content')
@if (session('info'))
    <div class="alert alert-success">
     <strong>{{session('info')}}</strong>
    </div>
@endif
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.categories.update', $category) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input placeholder="Ingrese el nombre del Taller" type="text" class="form-control" id="name" name="name" value="{{ old('name', $category->name) }}">
                    @error('name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                    <label for="name">Slug</label>
                    <input  readonly placeholder="Ingrese el nombre del Slug" type="text" class="form-control" id="slug" name="slug" value="{{ old('slug', $category->slug) }}">   
                    @error('slug')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
                <button type="submit" class="btn btn-primary">Actualizar Taller</button>
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