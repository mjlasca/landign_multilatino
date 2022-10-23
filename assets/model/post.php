<?php

require_once("assets/database/db.php");
use Assets\database\db\db;


class post{

    public $db;
    public $nametable;

    public function __construct(){
        $this->db = new db();
        $this->nametable = "post";
    }

    public function save(){

    }

    public function get(){
        
    }

    public function all(){
        $sql = "SELECT * FROM ".$this->nametable." WHERE estado = 1  ORDER BY reg DESC";
        $datos = $this->db->select($sql);

        return $datos;
    }

}

