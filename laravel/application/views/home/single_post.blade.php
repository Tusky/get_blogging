@layout('master/index')

@section('posts')
        <div id="post" class="well">
            <h2 class="post-title"><a href="post/{{ $post->slug }}">{{ $post->title }}</a></h2>
            <small>Added on <span class="post-added_on">{{ $post->created_at }}</span> by <a class="post-added_by" href="/author/{{ $post->author()->first()->nickname }}">{{ $post->author()->first()->nickname }}</a></small>
            <div class="post-tags">
                @foreach( $post->tags()->get() as $tag )
                    <a class="tag" href="tag/{{ $tag->slug }}">{{ $tag->name }}</a>
                @endforeach
            </div>
            <div class="post-body">{{ $post->body }}</div>
        </div>
        <a href="/" class="btn btn-primary">Back</a>
@endsection