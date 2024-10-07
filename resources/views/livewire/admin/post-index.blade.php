<div>

    <div class="card-header">
        <input  wire:model="search" type="text" class="form-control" placeholder="Ingrese la herramienta o maquina">
    </div>
    @if ($posts->count())
   
    <div class="card">
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Imagen</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->name}}</td>
                    <td> <img class="img-fluid" src="/storage/{{$post->image}}" alt="img"></td>

                    <td width="10px"><a class="btn btn-warning" href="{{route('admin.herramientas.edit', $post)}}">Editar</a></td>
                    <td width="10px">
                        <form action="{{route('admin.herramientas.destroy', $post)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
        </table>
    </div> 
    <div class="card-footer">
        {{$posts->links()}}
    </div>
    @endif
</div>