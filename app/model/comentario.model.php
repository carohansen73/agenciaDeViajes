<?php
include_once 'app/helpers/db.helper.php';

class ApiModel{

    private $dbHelper;
  
    function __construct(){
        $this->dbHelper = new DBHelper();
         //abro la conexión
        $this->db = $this->dbHelper->connect();
    }

    function getAll(){

        $query=$this->db->prepare('SELECT * FROM comentario');
        $query->execute();

        $comentario=$query->fetchAll(PDO::FETCH_OBJ);

        return $comentario;

    }

    function getAllByTour($id_tour){

        $query=$this->db->prepare('SELECT * FROM comentario  INNER JOIN usuarios ON id_usuario = usuarios.id WHERE id_tour = ?');
        $query->execute([$id_tour]);

        $comentario=$query->fetchAll(PDO::FETCH_OBJ);

        return $comentario;

    }

    function get($id){/*BORRAR*/

        $query=$this->db->prepare('SELECT * FROM comentario WHERE id = ?');
        $query->execute([$id]);

        $comentario=$query->fetch(PDO::FETCH_OBJ);
        return $comentario;
    }
    
    function remove($id){

        $query = $this->db->prepare('DELETE FROM comentario WHERE id = ?');
        $query->execute([$id]);

        return $query->rowCount();
    }

    function insert($texto, $calificacion, $idTour){
        $query = $this->db->prepare('INSERT INTO comentario (texto, calificacion, id_tour) VALUES (?,?,?)');
        $query->execute([$texto, $calificacion, $idTour]);

        return $this->db->lastInsertId();
    }

    function update($id, $texto, $calificacion, $idTour){/*BORRAR*/

        $query = $this->db->prepare('UPDATE comentario SET texto = ?, calificacion = ?, id_tour = ? WHERE id = ?');
        $result = $query->execute([$texto, $calificacion, $idTour, $id]);
        
        return $result;
    }
}