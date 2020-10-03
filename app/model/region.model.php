<?php

class RegionModel{

    private $db;
  
    function __construct(){
       $this->db= $this-> conectar();
    }

    private function conectar(){
        //1- Abro la conexion
        $db = new PDO('mysql:host=localhost;'.'dbname=db_agenciaviajes;charset=utf8', 'root', '');
        return $db;
    }

    function obtenerRegiones(){
       //2-Enviar la consulta (preparar y ejecutar)
        $query = $this->db->prepare('SELECT * FROM region');
        $query->execute();

        //3-procesar la respuesta para generar html
        $region = $query->fetchAll(PDO::FETCH_OBJ);
        //4- cerrar la conexion (PDO lo hace solo)
        return $region;
     
    }
    function insertarRegion($nombre, $informacion){

        //2-Enviar la consulta(los datos), lindeo los parametros (?,?,?)
        $query = $this->db->prepare('INSERT INTO region (nombre, informacion) VALUES (?,?)');
        $query->execute([$nombre, $informacion]);

        //3-no necesito obtener respuesta xq estoy insertando
        return $this->db->lastInsertId();

    }

    
};