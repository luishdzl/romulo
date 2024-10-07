<x-app-layout>
<div class="container p-4"> 
  <h2 class="mx-auto p-3">Tipos de herramientas</h2>      
 <div class="row">
  @foreach ($tags as $tag)    
  <div class="col-sm-3 card m-4 p-2" style="width: 18rem;">
          <div class="card-body">
            <a href="{{ route('posts.tag', $tag) }}" class="btn btn-primary d-flex justify-content-center align-self-end mt-auto">{{$tag->name}}</a>

   
          </div>
  </div>
@endforeach
 </div>
</div>

</x-app-layout>