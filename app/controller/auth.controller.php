<?php

include_once 'app/view/auth.view.php';
include_once 'app/model/usuario.model.php';


class AuthController{

    private $view;
    private $model;

    function __construct(){
        $this->view = new AuthView();
        $this->model = new usuarioModel();
    }

    function mostrarLogin(){
        $this->view-> mostrarFormLogin();
    }

    function iniciarSesion(){

        $email=$_POST['email'];
        $contraseña=$_POST['password'];

        if( empty ($email) || empty ($contraseña)){
            $this->view->mostrarError('Faltan datos obligatorios');
            die();
        }

        /*Obtengo el usuario*/
        $usuario = $this->model->obtenerEmail($email);

        if($usuario && password_verify($contraseña, $usuario->password)) {
            session_start();
            $_SESSION['ID_USUARIO'] = $usuario->id;
            $_SESSION['EMAIL_USUARIO'] = $usuario->email;

            header("Location: " . BASE_URL . "administrador");
        } else {
            echo 'denegado';
        };

        //var_dump($usuario);



        //header("location: " .BASE_URL); 
    }
}