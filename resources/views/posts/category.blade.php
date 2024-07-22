<x-app-layout>
    <div class="container">
        <div class="row">
          <div class="col-12 d-flex justify-content-center">
           <h1 class="uppercase pt-5">Taller de {{$category->name}}</h1>  
        </div>
        <div class="card">
            <div class="card-body">
            @foreach ($posts as $post)
        <x-card-post :post="$post" />
            @endforeach
            </div>
        </div>

    </div>
</x-app-layout>