@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear nuevo Post</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('admin.herramientas.store') }}" method="POST">
            @csrf
            <!--

            <div class="card ">
                <div class="card-body">
                    <h4>Configuarcion de inventario</h4>
            <div class="form-group">
                <label for="amount">Cantidad</label>
                <input placeholder="Ingrese la cantidad" type="number" class="form-control" id="amount" name="amount" value="{{ old('amount') }}">
                @error('amount')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="use">Estado de la herramienta</label>
            <select name="use" id="use" class="form-control">
                <option value="1">Operativo</option>
                <option value="2">Averiado</option>
            </select>
            @error('use')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    </div>-->


            <div class="form-group">
                <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}">
            </div>
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
        <div class="form-group">
            <label for="category_id">Taller</label>
            <select name="category_id" id="category_id" class="form-control">
                @foreach($categories as $category_id => $category_name)
                    <option value="{{ $category_id }}" {{ old('category_id') == $category_id ? 'selected' : '' }}>
                        {{ $category_name }}
                    </option>
                @endforeach
            </select>
            @error('category_id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <p class="font-weight-bold">Tipos de Herramienta</p>
            @foreach($tags as $tag)
                <div class="form-check">
                    <input type="checkbox" name="tags[]" value="{{ $tag->id }}" id="tag_{{ $tag->id }}" class="form-check-input" {{ in_array($tag->id, old('tags', [])) ? 'checked' : '' }}>
                    <label for="tag_{{ $tag->id }}" class="form-check-label">{{ $tag->name }}</label>
                </div>
            @endforeach
            @error('tags')
            <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
        <div class="form-group">
            <label>
                <input type="radio" name="status" value="1" {{ old('status', isset($post) ? $post->status : 1) == 1 ? 'checked' : '' }}>
                Borrador
            </label>
            <label>
                <input type="radio" name="status" value="2" {{ old('status', isset($post) ? $post->status : 1) == 2 ? 'checked' : '' }}>
                Publicado
            </label>
        </div>
        <div class="form-group">
            <label for="extract">Extracto:</label>
            <textarea name="extract" id="extract" class="form-control">{{ old('extract', isset($post) ? $post->extract : '') }}</textarea>
            @error('extract')
            <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
        <div class="form-group">
            <label for="body">Cuerpo del post:</label>
            <textarea name="body" id="body" class="form-control">{{ old('body', isset($post) ? $post->body : '') }}</textarea>
            @error('body')
            <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
            <button type="submit" class="btn btn-primary">Crear Post</button>
        </form>
    </div>
</div>
@stop

@section('js')
   <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3.0/jquery.stringToSlug.min.js') }}"></script>
   <script src="{{ asset('vendor/ckeditor5-build-classic/ckeditor.js') }}"></script>
   <script>
    $(document).ready(function() {
        $("#name").stringToSlug({
            setEvents: 'keyup keydown blur',
            getPut: '#slug',
            space: '-',
        });
    });

    ClassicEditor
        .create(document.querySelector('#extract'))
        .catch(error => {
            console.error(error);
        });

    ClassicEditor
        .create(document.querySelector('#body'))
        .catch(error => {
            console.error(error);
        });
   </script>
      <script>
        document.getElementById('amount').addEventListener('input', function (e) {
          e.target.value = e.target.value.replace(/[^0-9]/g, '');
        });
      </script>
@endsection
