<?php
include_once 'app/view/usuario.view.php';
include_once 'app/model/usuario.model.php';


class UsuarioController{

    private $model;
    private $view;

    function __construct(){
        
        $this->model = new UsuarioModel();
        $this->view = new UsuarioView();
        
    }

    function mostrarRegistro(){
        $this->view->mostrarRegistro();
    }

    function agregarUsuario(){

        $email=$_POST['email'];
        $password=$_POST['password'];
        $permiso=0;

        if( empty ($email) || empty ($password)){
            $this->view->mostrarRegistro('Faltan ingresar datos');
            die();
        }

        $controlarEmail=$this->model->obtenerEmail($email);//controla que no este el mismo nombre
            if(empty($controlarEmail)){

            $password=password_hash($password, PASSWORD_DEFAULT);

            $this->model->insertarUsuario($email, $password,$permiso);

            $this->iniciarSesion();
            session_start();
                
                header("location: " . BASE_URL . "home");
        }
        else{
            $this->view->mostrarRegistro('El usuario ya existe');
        }
    }

    function iniciarSesion(){

        $email=$_POST['email'];
        $contraseña=$_POST['password'];

        if( empty ($email) || empty ($contraseña)){
            $this->view->mostrarRegistro('Faltan ingresar datos');
            die();
        }

        /*Obtengo el usuario*/
        $usuario = $this->model->obtenerEmail($email);

        if($usuario && password_verify($contraseña, $usuario->password)) {
            session_start();
            $_SESSION['ID_USUARIO'] = $usuario->id;
            $_SESSION['EMAIL_USUARIO'] = $usuario->email;
            $_SESSION['PERMISO_USUARIO']=$usuario->permiso;

            header("Location: " . BASE_URL . "administrador");

        } else {
            $this->view->mostrarRegistro('datos incorrectos');
            die();
        };

    }
}