<?php

class Tag extends Basemodel
{
    public static $timestamps = false;

    public static $rules = array(
        'name' => 'required',
        'slug' => 'required',
        
    );

    public function post() {
        return $this->belongs_to('Post', 'posts_tags');
    }


}