<?php

class Pages extends Controller {
 
    public function __construct(){
       
    }

 //the idex page is the default then we have to specify it here too
    public function index(){
        $data = [
            "title" => "Welcome!",
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

