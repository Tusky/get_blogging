<?php

class Post extends Basemodel
{
    public static $timestamps = true;

    public static $rules = array(
        'title' => 'required',
        'body' => 'required',
        'slug' => 'required',
    );

    public function author() {
        return $this->belongs_to('Author');
    }

    public function tags() {
        return $this->has_many_and_belongs_to('Tag', 'posts_tags');
    }

}