<main role="main" class="pt-5">
<div class="jumbotron">
      <div class="container">
        <h1 class="display-3">¡Bienvenido, {{ Auth::user()->name }}!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a></p>
        <h2>Selecciona el Taller:</h2>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        @foreach ($categories as $category)
            <a class="btn btn-primary m-1" href="{{route('posts.category', $category)}}">{{$category->name}}</a>
        @endforeach
      </div>

      <hr>

    </div> <!-- /container -->

  </main>