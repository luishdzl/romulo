@props(['post'])
<div>
    <h4><a href="{{ route('posts.show', $post) }}" class="btn d-flex justify-content-center btn-warning">{{ $post->name }}</a></h4>
    @foreach ($post->tags as $tag)
        <a href="{{ route('posts.tag', $tag) }}" class="btn card-link btn-info mx-auto">{{ $tag->name }}</a>
    @endforeach
</div>