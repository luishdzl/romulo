@extends('adminlte::page')

@section('title', 'Editar')

@section('content_header')
    <h1>Editar</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('admin.inventories.update', $inventory) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="row d-flex justify-content-center m-3">
                   <!-- Herramienta selecionar -->
            <div class="form-group col-5">
                <label for="name">Herramienta actual</label><h2>{{ old('name', $inventory->post_name) }}</h2>
            </div>

            <div class="form-group col-5">
            <label for="post_id">Selecciona la nueva herramienta</label>
            <select name="post_name" id="post_name" class="form-control">
                @foreach($posts as $post_id => $post_name)
                    <option value="{{ $post_name }}" {{ old('post_name', $inventory->post_name) == $post_name ? 'selected' : '' }}>
                        {{ $post_name }}
                    </option>
                @endforeach
            </select>
            @error('category_name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <hr>
    <div class="row d-flex justify-content-center m-3">
        <div class="form-group col-5">
            <label for="name">Taller actual</label><h2>{{ old('name', $inventory->category_name) }}</h2>
        </div>

        <div class="form-group col-5">
            <label for="category_id">Selecciona el nuevo Taller</label>
            <select name="category_name" id="category_name" class="form-control">
                @foreach($categories as $category_id => $category_name)
                    <option value="{{ $category_name }}" {{ old('category_name', $inventory->category_name) == $category_name ? 'selected' : '' }}>
                        {{ $category_name }}
                    </option>
                @endforeach
            </select>
            @error('category_name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <hr>
        <div class="form-group">
            <label for="numeric_value">Cantidad</label>
            <input placeholder="Ingrese la cantidad" type="number" class="form-control" id="numeric_value" name="numeric_value" value="{{ old('numeric_value', $inventory->numeric_value) }}">
            @error('numeric_value')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
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
