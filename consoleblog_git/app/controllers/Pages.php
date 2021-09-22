<?php
  class Pages extends Controller {
    public function __construct(){
    }
    public function index(){ 
      if(isLoggedIn()){
        redirect('/posts');
      }


      $data = [
        'title' => 'Console.Blog',
        'description' => 'Blogging it to the Console.... Coming Soon....'
     ];
      $this->view('pages/index', $data);
    }
    public function about(){
      $data = [
        'title' => 'About',
        'description' => 'Sharing'
      ];
      $this->view('pages/about', $data);
    }
  }