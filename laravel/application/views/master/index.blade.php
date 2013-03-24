<!DOCTYPE html>
<html>
<head>
    <title>Blog</title>
    {{ HTML::style('css/bootstrap.min.css') }}
    {{ HTML::script('js/jquery.js') }}
    {{ HTML::script('js/jtruncate.js') }}
</head>
<body>
<div class="container">
    <div class="row">
        <div class="span12">
            <div class="navbar">
                <div class="navbar-inner">
                    <a class="brand" href="#">Get Blogging - Laravel</a>
                    <ul class="nav">
                        <li><a href="/">Home</a></li>
                        @if(Auth::check())
                            <li><a href="/admin/">Admin</a></li>
                            <li><a href="/logout/">Logout</a></li>
                        @else
                            <li><a href="/login/">Login</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
        <hr />
    </div>
    <div class="row">
        <div class="span12 posts">
            @yield('posts')
        </div>
    </div>
</div>
<script>
    $('.post-body').jTruncate("p");
</script>
</body>
</html>