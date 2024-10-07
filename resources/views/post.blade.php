<x-app-layout>
<div class="container p-4">  
  <h2 class="mx-auto p-3">Todas las herramientas</h2>     
 <div class="row">
  @foreach ($posts as $post)    
    <div class="col-sm-3 card m-4 p-2" style="width: 18rem;">
            <div class="card-body">
              <a href="{{route('posts.show', $post)}}" class="btn btn-primary d-flex justify-content-center align-self-end mt-auto">{{$post->name}}</a>
              @foreach ($post->tags as $tag)
               <a href="{{ route('posts.tag', $tag) }}" class="btn btn-warning m-1">{{$tag->name}}</a>
              @endforeach
                <p class="card-text">{!!$post->extract!!}</p>
                
                
            </div>
    </div>
  @endforeach
 </div>
</div>

</x-app-layout>