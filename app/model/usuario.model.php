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

    /*Devuelve el usuario*/
    function obtenerEmail($email){
        $query = $this->db->prepare('SELECT * FROM usuarios WHERE email = (?)');
        $query->execute([$email]);
        return $query->fetch(PDO::FETCH_OBJ);
    }
}