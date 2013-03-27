<!DOCTYPE html>
<html>
<head>
    <title>Blog</title>
    <link rel="stylesheet" href="static/css/bootstrap.min.css" />
    <script src="static/js/jquery.js"></script>
    <script src="static/js/jtruncate.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="span12">
            <div class="navbar">
                <div class="navbar-inner">
                    <a class="brand" href="#">Get Blogging - Django</a>
                    <ul class="nav">
                        <li><a href="/">Home</a></li>
                        <?php if( false ): ?>
                            <li><a href="/admin/">Admin</a></li>
                            <li><a href="/admin/logout/">Logout</a></li>
                        <?php else: ?>
<!--                        <li><a href="/admin/login/">Login</a></li>-->
                        <?php endif ?>
                    </ul>
                </div>
            </div>
        </div>
        <hr />
    </div>
    <div class="row">
        <div class="span12 posts">