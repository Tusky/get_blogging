<?php

class Author extends Basemodel
{
    public static $timestamps = true;

    public static $rules = array(
        'nickname' => 'required',
        'email' => 'required|mail',
        'password' => 'required',
        
    );

    public function posts() {
        return $this->has_many('Post');
    }


}