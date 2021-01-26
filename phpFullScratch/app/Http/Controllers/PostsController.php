<?php

class PostsController
{
  // コンストラクタの定義
  public function __construct($models, $views)
  {
    $this->models = $models;
    $this->views = $views;
  }
  public function index() 
  {
    include($this->models.'Post.php');
    $postmodel = new Post();
    $result = $postmodel->index();

    $posts = $result;
    include($this->views."posts/index.php");
  }
  public function create()
  {
    echo "This is Create Page.";
  }
}


// var_dump($posts[0]);
?>