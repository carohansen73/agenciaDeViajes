<?php

class TourModel{
    private $db;

    function __construct(){/*HABRO LA CONEXION*/
       $this-> db= $this-> conectar();
    }

    private function conectar(){
        $db = new PDO('mysql:host=localhost;'.'dbname=db_tareas;charset=utf8', 'root', '');
        return $db;
    }

function obtenerTour($id_region){

    $db =$this-> conectar();/*ABRO LA CONEXION*/

    $query=$db->prepare('SELECT * FROM tour WHERE id_region = ?');/*ENVIAR LA CONSULTA*/
    $query->execute([$id_region]);

    $tour=$query->fetchAll(PDO::FETCH_OBJ);/*OBTENGO LA RESPUESTA CON UN FETCHALL XQ SON MUCHOS*/

    return $tour;
}

function insertarTour($destinos, $paquete,$itinerario,$precio){

    
    $query=$this->db->prepare('INSERT INTO tour (destinos, paquete, itinerario, precio) VALUES(?,?,?,?)');
    
    $query->execute([$destinos, $paquete,$itinerario,$precio]);


  
    //return $this->db->lastInsertId($titulo , $descripcion, $prioridad);/*obtengo id*/
}
function borrarTour($id){

       
    $query=$this->db->prepare('DELETE FROM tour WHERE id =?');
    $query->execute([$id]);
  
}
}
