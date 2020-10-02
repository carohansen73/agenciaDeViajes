
<?php

class AuthController{

    function iniciarSecion(){

    $email=$_POST['titulo'];
    $contraseña=$_POST['descripcion'];


    if( empty ($email) || empty ($contraseña)){
    $this->view->mostrarError('Faltan datos obligatorios');
    die();
    }
    $id=$this->model->insertTask($email,$contraseña);

    header("location: " .BASE_URL);
    }
}