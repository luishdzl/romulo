@extends('adminlte::page')

@section('title', 'Incorporar Herramienta')

@section('content_header')
    <h1>Agrear</h1>
@stop


@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('admin.cargos.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="persona">Selecciona la CI</label>
                <select name="cedula" id="persona" class="form-control" onchange="populateName()">
                    @foreach($users as $user)
                        <option value="{{ $user->cedula }}" data-name="{{ $user->name }}" {{ old('persona') == $user->cedula ? 'selected' : '' }}>
                            {{ $user->cedula }}
                        </option>
                    @endforeach
                </select>
                @error('cedula')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" class="form-control" id="name" name="persona" readonly>
                @error('persona')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="taller">Selecciona el Taller</label>
                <select name="taller" id="taller" class="form-control">
                    @foreach($categories as $category_id => $category_name)
                        <option value="{{ $category_name }}" {{ old('category_name') == $category_name ? 'selected' : '' }}>
                            {{ $category_name }}
                        </option>
                    @endforeach
                </select>
                @error('taller')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="cargo">Cargo</label>
                <select name="cargo" id="cargo" class="form-control">
                    <option value="">Seleciona un cargo</option>
                    <option value="Administrador">Administrador</option>
                    <option value="Secretaría">Secretaria</option>
                    <option value="Profesor">Profesor</option>
                    <option value="Cordinador">Cordinador</option>
                </select>
                @error('cargo')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Agregar</button>
        </form>
    </div>
</div>
@stop

@section('js')
<script>
    function populateName() {
        var select = document.getElementById('persona');
        var nameInput = document.getElementById('name');
        var selectedOption = select.options[select.selectedIndex];
        var name = selectedOption.getAttribute('data-name');
        nameInput.value = name;
    }

    document.addEventListener('DOMContentLoaded', function() {
        populateName(); // muesta el nombre si la cedula esta selecionada 
    });
</script>
@endsection