<x-app-layout>
    <div class="container py-4"></h1>
       <h1>{{ $post->name }} :</h1>
       <h5>{!! $post->extract !!}</h5>
    </div>
    <div class="m-4">
    <p>{!!$post->body!!}</p>
    </div>

</x-app-layout>