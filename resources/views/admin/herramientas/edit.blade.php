@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Modificar Post</h1>
@stop

@section('content')
@if (session('info'))
    <div class="alert alert-success">
     <strong>{{ session('info') }}</strong>
    </div>
@endif

<div class="card">
    <div class="card-body">
        <form action="{{ route('admin.herramientas.update', $herramienta) }}" method="POST">
            @method('PUT')
            @csrf

            <!-- Hidden User ID -->
            <div class="form-group">
                <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}">
            </div>

            <!-- Name and Slug Section -->
            <div class="form-group">
                <label for="name">Nombre</label>
                <input placeholder="Ingrese el nombre del Taller" type="text" class="form-control" id="name" name="name" value="{{ old('name', $herramienta->name) }}">
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="slug">Slug</label>
                <input readonly placeholder="Ingrese el nombre del Slug" type="text" class="form-control" id="slug" name="slug" value="{{ old('slug', $herramienta->slug) }}">   
                @error('slug')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <!-- Category Selection -->
            <div class="form-group">
                <label for="category_id">Taller</label>
                <select name="category_id" id="category_id" class="form-control">
                    @foreach($categories as $category_id => $category_name)
                        <option value="{{ $category_id }}" {{ old('category_id', $herramienta->category_id) == $category_id ? 'selected' : '' }}>
                            {{ $category_name }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Tags Selection -->
            <div class="form-group">
                <p class="font-weight-bold">Tipos de Herramienta</p>
                @foreach($tags as $tag)
                    <div class="form-check">
                        <input type="checkbox" name="tags[]" value="{{ $tag->id }}" id="tag_{{ $tag->id }}" class="form-check-input" {{ in_array($tag->id, old('tags', $herramienta->tags->pluck('id')->toArray())) ? 'checked' : '' }}>
                        <label for="tag_{{ $tag->id }}" class="form-check-label">{{ $tag->name }}</label>
                    </div>
                @endforeach
                @error('tags')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>

            <!-- Status Radios -->
            <div class="form-group">
                <label>
                    <input type="radio" name="status" value="1" {{ old('status', $herramienta->status) == 1 ? 'checked' : '' }}>
                    Borrador
                </label>
                <label>
                    <input type="radio" name="status" value="2" {{ old('status', $herramienta->status) == 2 ? 'checked' : '' }}>
                    Publicado
                </label>
            </div>

            <div class="form-group">
                <label for="image">Imagen</label>
                <input type="file" accept="image/*" class="form-control" id="image" name="image" value="{{ old('image') }}">
                @error('image')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

            <!-- Extract and Body Text Areas -->
            <div class="form-group">
                <label for="extract">Extracto:</label>
                <textarea name="extract" id="extract" class="form-control">{{ old('extract', $herramienta->extract) }}</textarea>
                @error('extract')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="body">Cuerpo del post:</label>
                <textarea name="body" id="body" class="form-control">{{ old('body', $herramienta->body) }}</textarea>
                @error('body')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Actualizar Post</button>
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

    document.getElementById('amount').addEventListener('input', function (e) {
        e.target.value = e.target.value.replace(/[^0-9]/g, '');
    });
   </script>
@endsection
