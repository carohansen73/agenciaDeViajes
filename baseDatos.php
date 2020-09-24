<?php

function connect(){
    $db = new PDO('mysql:host=localhost;'.'dbname=agencia_viajes;charset=utf8', 'root', '');
    return $db;
}

/*DEVUELVE LA INFO DE LA BASE DE DATOS*/
function getTour(){

    $db=connect();/*HABRO LA CONEXION*/

    $query=$db->prepare('SELECT * FROM tour');/*ENVIAR LA CONSULTA*/
    $query->execute();

    $tour=$query->fetchAll(PDO::FETCH_OBJ);/*OBTENGO LA RESPUESTA CON UN FETCHALL XQ SON MUCHOS*/

    return $tour;
}

function getDestino(){

    $db=connect();/*HABRO LA CONEXION*/

    $query=$db->prepare('SELECT * FROM region');/*ENVIAR LA CONSULTA*/
    $query->execute();

    $region=$query->fetchAll(PDO::FETCH_OBJ);/*OBTENGO LA RESPUESTA CON UN FETCHALL XQ SON MUCHOS*/

    return $region;
}