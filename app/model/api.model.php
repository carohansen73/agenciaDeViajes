<?php

include_once 'app/helpers/db.helper.php';

class ApiModel{

    private $db;
    
    private $dbHelper;
  
    function __construct(){

        $this->dbHelper = new DBHelper();

         //abro la conexión
        $this->db = $this->dbHelper->connect();
       
    }

    function getAll(){

        $query=$this->db->prepare('SELECT * FROM comentario');
        $query->execute();

        $comentarios=$query->fetchAll(PDO::FETCH_OBJ);

        return $comentarios;

    }

    function get($id){

        $query=$this->db->prepare('SELECT * FROM comentario WHERE id = ?');
        $query->execute([$id]);

        $comentario=$query->fetch(PDO::FETCH_OBJ);

        return $comentario;

    }
    
    function remove($id){

        $query = $this->db->prepare('DELETE FROM region WHERE id = ?');
        $query->execute([$id]);

        //usar esto para avisar cuando no se puede eliminar categoria!
        return $query->rowCount();
    }
}