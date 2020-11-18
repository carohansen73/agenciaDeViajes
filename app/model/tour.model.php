<?php
include_once 'app/helpers/db.helper.php';

class TourModel{
    
    private $dbHelper;

    function __construct(){
        $this->dbHelper = new DBHelper();
        $this->db = $this->dbHelper->connect();
    }

    function obtenerTours(){
      
        $query=$this->db->prepare('SELECT * FROM tour');
        $query->execute();

        $tours=$query->fetchAll(PDO::FETCH_OBJ);

        return $tours;
    }

    function obtenerTour($id_region=null){

        $query=$this->db->prepare('SELECT t.*, r.nombre FROM `tour` t  JOIN region r ON t.id_region = r.id WHERE id_region = ?');
        /*$query=$this->db->prepare('SELECT * FROM tour WHERE id_region = ?');*/
        $query->execute([$id_region]);

        $tour=$query->fetchAll(PDO::FETCH_OBJ);

        return $tour;
    }

    function detalleTour($id){
        $query=$this->db->prepare('SELECT * FROM tour WHERE id = ?');
        $query->execute([$id]);

        $tour=$query->fetch(PDO::FETCH_OBJ);

        return $tour;
    }

    function insertarTour($destinos, $paquete,$itinerario,$precio,$id_region){

        $query=$this->db->prepare('INSERT INTO tour (destinos, paquete, itinerario, precio, id_region) VALUES(?,?,?,?,?)');
        $query->execute([$destinos, $paquete,$itinerario,$precio,$id_region]);

        return $this->db->lastInsertId();
    }   
    
    function borrarTour($id){

        $query=$this->db->prepare('DELETE FROM tour WHERE id =?');
        $query->execute([$id]);
    }

    function actualizarTour($destinos, $paquete,$itinerario,$precio,$id_region,$id){

        $query = $this->db->prepare('UPDATE tour SET destinos=?, paquete = ?, itinerario = ?, precio = ?, id_region = ? WHERE id=? ');
        $query->execute([$destinos, $paquete,$itinerario,$precio,$id_region,$id]);
    }
}
