@layout('master/index')

@section('posts')
    @for ($i=0;$i < count($posts);$i++)
        <div id="post-{{ $i }} post" class="well">
            <h2 class="post-title"><a href="/post/{{ $posts[$i]->slug }}">{{ $posts[$i]->title }}</a></h2>
            <small>Added on <span class="post-added_on">{{ $posts[$i]->created_at }}</span> by <a class="post-added_by" href="/author/{{ $posts[$i]->author()->first()->nickname }}">{{ $posts[$i]->author()->first()->nickname }}</a></small>
            <div class="post-tags">
                @foreach( $posts[$i]->tags()->get() as $tag )
                <a class="tag" href="/tag/{{ $tag->slug }}">{{ $tag->name }}</a>
                @endforeach
            </div>
            <div class="post-body">{{ $posts[$i]->body }}</div>
        </div>
    @endfor
    @unless( $index )
        <a href="/" class="btn btn-primary">Back</a>
    @endunless
@endsection