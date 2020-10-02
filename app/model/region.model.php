<?php

class RegionModel{

    private $db;

    function __construct(){/*HABRO LA CONEXION*/
       $this-> db= $this-> conectar();
    }

    private function conectar(){
        $db = new PDO('mysql:host=localhost;'.'dbname=db_tareas;charset=utf8', 'root', '');
        return $db;
    }
    function conectar(){
        $db = new PDO('mysql:host=localhost;'.'dbname=db_agenciaviajes;charset=utf8', 'root', '');
        return $db;
    }

    function obtenerRegiones(){
        //1- Abro la conexion
         $db =$this-> conectar();

        //2-Enviar la consulta (preparar y ejecutar)
        $query = $db->prepare('SELECT * FROM region');
        $query->execute();

        //3-procesar la respuesta para generar html
        $region = $query->fetchAll(PDO::FETCH_OBJ);//arreglo con las tareas

        return $region;
        //4- cerrar la conexion (PDO lo hace solo)
    }

    
};