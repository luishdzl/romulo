@props(['post'])

@foreach ($post->tags as $tag)
<div class="col-sm-3 card m-4 p-3" style="width: 18rem;">
    <h4><a href="{{ route('posts.show', $post) }}" class="btn d-flex justify-content-center btn-warning">{{ $post->name }}</a></h4>
        <a href="{{ route('posts.tag', $tag) }}" class="btn card-link btn-info mx-auto">{{ $tag->name }}</a>

</div>

@endforeach