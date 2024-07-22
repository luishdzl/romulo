@extends('adminlte::page')

@section('title', 'Admin Panel')

@section('content_header')
    <h1>Asignar un rol</h1>
@stop

@section('content')
@if (session('info'))
    <div class="alert alert-success">
     <strong>{{session('info')}}</strong>
    </div>
@endif
      <div class="card">
        <div class="card-body">
            <p class="h5">Usuario:</p>
            <p class="form-control">{{$user->name}}</p>
<h2 class="h5">Listado de roles:</h2>
                    <form action="{{ route('admin.users.update', $user) }}" method="POST">
                        @method('PUT')
                        @csrf
                        @foreach ($roles as $role)
                        <div class="form-check">
                        <label>
                            <input type="checkbox" name="roles[]" value="{{ $role->id }}" class="mr-1" 
                            {{ $user->roles->contains($role->id) ? 'checked' : '' }}>
                            {{$role->name}}
                        </label>
                        </div>
                    @endforeach
                        <button type="submit" class="btn btn-primary">Asignar rol</button>
                    </form>
        </div>
      </div>
@stop
