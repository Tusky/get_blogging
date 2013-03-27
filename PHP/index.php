<?php

include_once('helpers/url_resolver.php');
include_once('helpers/db.php');
include('templates/header.php');

$query = $dbh->query("SELECT * FROM posts");








while( $result = $query->fetch(PDO::FETCH_ASSOC) ){ ?>
    <div id="post" class="well">
        <h2 class="post-title"><?php echo $result['title']; ?></h2>
        <small>Added on <span class="post-added_on"><?php echo $result['created_at']; ?></span> by <a class="post-added_by" href="/author/<?php echo $result['user_id']; ?>"><?php echo $result['user_id']; ?></a></small>
        <div class="post-tags"><a class="tag" href="/tag/tag.slug">tag</a></div>
        <div class="post-body"><?php echo $result['body']; ?></div>
    </div>
    <a href="/" class="btn btn-primary">Back</a>
<?php
}
include('templates/footer.php');
//$path = new Url();
//$path->run();
