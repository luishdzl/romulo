@extends('adminlte::page')

@section('title', 'Editar')

@section('content_header')
    <h1>Editar</h1>
@stop
@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('admin.cargos.update', $cargo) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="persona">Selecciona la CI</label>
                <select name="cedula" id="persona" class="form-control" onchange="populateName()">
                    @foreach($users as $user)
                        <option value="{{ $user->cedula }}" data-name="{{ $user->name }}" {{ $cargo->cedula == $user->cedula ? 'selected' : '' }}>
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
                <input type="text" class="form-control" id="name" name="persona" readonly value="{{ $cargo->persona }}">
                @error('persona')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="taller">Selecciona el Taller</label>
                <select name="taller" id="taller" class="form-control">
                    @foreach($categories as $category_id => $category_name)
                        <option value="{{ $category_name }}" {{ $cargo->taller == $category_name ? 'selected' : '' }}>
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
                    <option value="Administrador" {{ $cargo->cargo == 'Administrador' ? 'selected' : '' }}>Administrador</option>
                    <option value="Secretaría" {{ $cargo->cargo == 'Secretaria' ? 'selected' : '' }}>Secretaria</option>
                    <option value="Profesor" {{ $cargo->cargo == 'Profesor' ? 'selected' : '' }}>Profesor</option>
                    <option value="Coordinador" {{ $cargo->cargo == 'Coordinador' ? 'selected' : '' }}>Coordinador</option>
                </select>
                @error('cargo')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Actualizar</button>
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