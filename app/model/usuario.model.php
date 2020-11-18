<?php
include_once 'app/helpers/db.helper.php';

class UsuarioModel{
    
    private $dbHelper;
  
    function __construct(){
        $this->dbHelper = new DBHelper();
        $this->db = $this->dbHelper->connect();
    }

    /*Devuelve el usuario*/
    function obtenerEmail($email){

        $query = $this->db->prepare('SELECT * FROM usuarios WHERE email = (?)');
        $query->execute([$email]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

    function obtenerUsuarios(){

        $query = $this->db->prepare('SELECT * FROM  usuarios');
        $query->execute();
        $usuarios=$query->fetchAll(PDO::FETCH_OBJ);

        return $usuarios;
    }

    function insertarUsuario($email,$password,$permiso){

        $query=$this->db->prepare ("INSERT INTO usuarios (email, password) VALUES(?,?,?)");
        $query->execute([$email,$password,$permiso]);

        return $this->db->lastInsertId();

    }
}