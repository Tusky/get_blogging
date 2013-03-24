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
            <h1>Get Blogging - Laravel</h1>
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