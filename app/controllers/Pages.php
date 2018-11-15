<?php

class Pages extends Controller {
 
    public function __construct(){
        $this->postModel = $this->model("Post");
        // requires the file
    }

    //the idex page is the default then we have to specify it here too
    public function index(){

        $posts = $this->postModel->getPosts();
        // we query the database and passing the result to the view
        $data = [
            "title" => "Welcome!",
            "posts"=> $posts
        ];

// extending Controller, trere s access to view, view takes the page to load and other parameters if there are 
         $this->view("pages/index", $data);//set in folder views
    }

    public function about(){
        $data =[
            "title" => "About Us"
        ];

        $this->view("pages/about", $data);
    }
}

