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

        $query=$this->db->prepare('SELECT com.id, usr.email, com.texto, com.calificacion 
                                    FROM comentario AS com 
                                    INNER JOIN usuarios as usr 
                                    ON com.id_usuario = usr.id WHERE com.id_tour = ?');;
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

    function insert($texto, $calificacion, $idTour, $idUsuario){
        $query = $this->db->prepare('INSERT INTO comentario (texto, calificacion, id_tour, id_usuario) VALUES (?,?,?,?)');
        $query->execute([$texto, $calificacion, $idTour, $idUsuario]);

        return $this->db->lastInsertId();
    }

    function update($id, $texto, $calificacion, $idTour){/*BORRAR*/

        $query = $this->db->prepare('UPDATE comentario SET texto = ?, calificacion = ?, id_tour = ? WHERE id = ?');
        $result = $query->execute([$texto, $calificacion, $idTour, $id]);
        
        return $result;
    }
}