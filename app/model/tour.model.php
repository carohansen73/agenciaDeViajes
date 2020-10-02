<?php

class TourModel{
    
    private $db;

    function __construct(){
       $this->db= $this-> conectar();
    }

    private function conectar(){
        $db = new PDO('mysql:host=localhost;'.'dbname=db_tareas;charset=utf8', 'root', '');
        return $db;
    }

    function obtenerTour($id_region){

      
        $query=$this->db->prepare('SELECT * FROM tour WHERE id_region = ?');
        $query->execute([$id_region]);

        $tour=$query->fetchAll(PDO::FETCH_OBJ);

        return $tour;
    }

    function insertarTour($destinos, $paquete,$itinerario,$precio){

    
        $query=$this->db->prepare('INSERT INTO tour (destinos, paquete, itinerario, precio) VALUES(?,?,?,?)');
        
        $query->execute([$destinos, $paquete,$itinerario,$precio]);

        return $this->db->lastInsertId($destinos, $paquete,$itinerario,$precio);
    }   
    function borrarTour($id){

        $query=$this->db->prepare('DELETE FROM tour WHERE id =?');
        $query->execute([$id]);
    
    }
}
