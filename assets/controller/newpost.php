<?php


require_once 'assets/model/post.php';

class newpost 
{

    public $posts;

    public function __construct(){
        var_dump($_GET);
    }

}

$cc = new newpost();


