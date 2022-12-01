<?php

class Posts extends Controller{
    function __construct() {
        $this->postModel=$this->model('Post');
    }

    //display pages
    public function index(){
        //get posts
        $data=$this->postModel->getpost();
        //display data in view index
        $this->view('posts/index',$data);
    }

    public function about(){
        $this->view('posts/about');
    }

    public function add(){
        $this->view('posts/add');
    }

    //add post
    public function addpost(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            extract($_POST);
            $this->postModel->addpost($_SESSION['id'],$title,$body);
        }
    }
}
