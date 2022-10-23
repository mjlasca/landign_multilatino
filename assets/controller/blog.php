<?php


require_once 'assets/model/post.php';

class blog 
{

    public $posts;

    public function __construct(){
        $this->posts = new post();
        $this->posts = $this->posts->all();
    }

}

$cc = new blog();


