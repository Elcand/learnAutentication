<div>
    @foreach ($posts as $post)
        @if(auth()->user()->can('update', $post))
            <a href="{{ route('post.edit', $post->id) }}">{{ $post->title }}</a>
        @endif
        <br>
    @endforeach
</div>
