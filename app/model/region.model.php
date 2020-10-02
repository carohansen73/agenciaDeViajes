<?php

class RegionModel{

    private $db;
  
    function __construct(){
       $this->db= $this-> conectar();
    }

    private function conectar(){
        $db = new PDO('mysql:host=localhost;'.'dbname=db_agenciaviajes;charset=utf8', 'root', '');
        return $db;
    }

    function obtenerRegiones(){
       
        $query = $this->db->prepare('SELECT * FROM region');
        $query->execute();

        
        $region = $query->fetchAll(PDO::FETCH_OBJ);

        return $region;
     
    }

    
};