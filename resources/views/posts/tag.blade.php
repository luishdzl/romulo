<x-app-layout>
    <div class="container">
        <div class="row">
          <div class="col-12 d-flex justify-content-center">
           <h1 class="uppercase pt-5">Tipo: {{$tag->name}}</h1>  
        </div>

            @foreach ($posts as $post)
        <x-card-post :post="$post" />
            @endforeach


    </div>
</x-app-layout>