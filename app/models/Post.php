<?php

class Post {
    private $db;

    public function __construct(){
        $this->db = new Database;
    }
    // this model is to load with the controller, the core Controller class has the method model(), 
    // require_once "../app/models/".$model.".php";    and returns new $model(); 
    // it will look in the models folder for watever the arg of the function is.. in this case is Post, and then  will return new Post
}