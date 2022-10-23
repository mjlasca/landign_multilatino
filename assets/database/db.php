<?php

namespace Assets\database\db;
require_once 'config.php';

use Exception;
use PDO;

class db{

    private $connect;

    public function __construct()
    {
        $connectionstring = "mysql:hos=".FS_DB_HOST.";dbname=".FS_DB_NAME.";charset=utf8";

        try{
            $this->connect = new PDO($connectionstring,FS_DB_USER,FS_DB_PASS);
            $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch (Exception $e){
            echo "ERROR de conexión ".$e->getMessage();
        }
    }

    /**
     * Exec query
     */
    public function exec($sql){
        $exec = $this->connect->prepare($sql);
        try{
            $exec->execute();
        }catch(Exception $e){
            return FALSE;
        }
    }

    public function select($sql){
        $exec = $this->connect->query($sql);
        try{
            return $exec->fetchAll(PDO::FETCH_ASSOC);
        }catch(Exception $e){
            return FALSE;
        }
    }

}







