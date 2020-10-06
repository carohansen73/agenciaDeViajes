<?php
class usuarioModel{
    
    private $db;
  
    function __construct(){
       $this->db= $this-> conectar();
    }

    private function conectar(){
        //1- Abro la conexion
        $db = new PDO('mysql:host=localhost;'.'dbname=db_agenciaviajes;charset=utf8', 'root', '');
        return $db;
    }

}