<?php

class Create_Author_Table {

    public function up()
    {
        Schema::create('authors', function($table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('nickname')->unique();
            $table->string('password', 32);
            $table->timestamps();
            
    });

    }    

    public function down()
    {
        Schema::drop('authors');
    }

}