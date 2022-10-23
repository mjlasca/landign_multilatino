<?php


require_once("assets/database/db.php");
use Assets\database\db\db;


class parametros{

    public $db;
    public $nametable;

    public function __construct(){
        $this->db = new db();
        $this->nametable = "parametros";
    }

    public function save(){

    }

    public function get(){
        
    }

    public function all(){
        $sql = "SELECT * FROM ".$this->nametable."  ";
        $datos = $this->db->exec($sql);
        return $datos;
    }

}

