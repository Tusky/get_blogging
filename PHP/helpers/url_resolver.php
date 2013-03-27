<?php

class Url {
    private $class = "home";
    private $function = "show";
    private $values = array();

    public function __construct(){
        $page = isset($_GET['page']) ? $_GET['page'] : '';

        if (!empty($page)){
            $pages = explode('/',$page);
            $this->class = array_shift($pages);
            $this->function = array_shift($pages);
            $this->parseValuesAssoc($pages);
        }
    }

    public function debug(){
        echo 'Class: ' . $this->class . '<br />';
        echo 'Function: ' . $this->function . '<br />';
        echo 'Values: ' . var_dump($this->values) . '<br />';
    }

    private function parseValuesAssoc($pages){
        $values = array();
        for($i=0;$i < count($pages);$i=$i+2){
            isset($pages[$i+1]) ? $values[$pages[$i]] = $pages[$i+1] : array_push($values, $pages[$i]);
        }
        $this->values = $values;
    }

    public function run(){
        if(file_exists("controllers/" . $this->class . ".php")){
            include "controllers/" . $this->class . ".php";
            $function = $this->function;
            $class = new $this->class;
            $class->$function($this->values);
        }else{
            echo "404";
        }
    }
}