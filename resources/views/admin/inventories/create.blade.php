@extends('adminlte::page')

@section('title', 'Incorporar Herramienta')

@section('content_header')
    <h1>Agrear</h1>
@stop


@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('admin.inventories.store') }}" method="POST">
            @csrf
        <div class="form-group">
            <label for="post_id">Selecciona la herramienta</label>
            <select name="post_name" id="post_name" class="form-control">
                @foreach($posts as $post_id => $post_name)
                    <option value="{{ $post_name }}" {{ old('post_name') == $post_name ? 'selected' : '' }}>
                        {{ $post_name }}
                    </option>
                @endforeach
            </select>
            @error('category_name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="category_id">Selecciona el Taller</label>
            <select name="category_name" id="category_name" class="form-control">
                @foreach($categories as $category_id => $category_name)
                    <option value="{{ $category_name }}" {{ old('category_name') == $category_name ? 'selected' : '' }}>
                        {{ $category_name }}
                    </option>
                @endforeach
            </select>
            @error('category_name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="numeric_value">Cantidad</label>
            <input placeholder="Ingrese la cantidad" type="number" class="form-control" id="numeric_value" name="numeric_value" value="{{ old('numeric_value') }}">
            @error('numeric_value')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
            <button type="submit" class="btn btn-primary">Agrear</button>
        </form>
    </div>
</div>
@stop

@section('js')
      <script>
        document.getElementById('numeric_value').addEventListener('input', function (e) {
          e.target.value = e.target.value.replace(/[^0-9]/g, '');
        });
      </script>
@endsection






