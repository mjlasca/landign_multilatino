<?php

require_once 'assets/model/parametros.php';


class home{

    public $parametros;

    public function __construct(){
        $this->parametros = new parametros();
    }



}

$home = new home();
