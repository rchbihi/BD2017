<?php

class db
{
    public static $instance;
    private $pdo;
    
    public function __construct(){
        $this->pdo = new PDO("pgsql:host='localhost';dbname= 'postgres';charset=utf8","postgres","123456abc");
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }
    
    public function set($sql){
        $stm = $this->pdo->prepare($sql);
        return $stm->execute();
    }
    
    public function get($sql){
        $stm = $this->pdo->prepare($sql);
        $stm->execute();
        return $stm->fetchall(PDO::FETCH_OBJ);
    }
    
    public static function getInstance(){
        if(!isset(self::$instance)){
            self::$instance = new DB();
        }
        return self::$instance;
    }
}
?>