<?php

require_once("config.php");
require_once( LC_PATH. "assets/middlewares/middlewares.php");
use Assets\middlewares\middlewares;



//controller primary
require_once(LC_PATH."assets/controller/primary.php");

//Header
include(LC_PATH."assets/views/header.html");



//Body
$PAGE = $_SERVER['REQUEST_URI'];

$url = LC_PATH."assets/views".$PAGE."/index.html";
if(substr( $PAGE, -1 ) == "/")
  $url = LC_PATH."assets/views/index.html";  


if (!file_exists($url)) {
  include(LC_PATH."assets/error/error404.html");
}
else{
  include($url);
}

//footer
include(LC_PATH."assets/views/footer.html");

?>
