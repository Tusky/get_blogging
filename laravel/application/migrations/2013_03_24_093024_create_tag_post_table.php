<?php

class Create_Tag_post_Table {    

    public function up()
    {
        Schema::create('tag_post', function($table) {
            $table->increments('id');
            $table->integer('post_id');
            $table->integer('tag_id');
            
    });

    }    

    public function down()
    {
        Schema::drop('tag_post');
    }

}