
<?php

class AuthController{

    private $view;

    function __construct(){
       
        $this->view = new AuthView();
    }

    function mostrarLogin($id){
        
        $this->view-> mostrarFormLogin();
    }

    function iniciarSesion(){

        $email=$_POST['email'];
        $contraseña=$_POST['contraseña'];


        if( empty ($email) || empty ($contraseña)){
        $this->view->mostrarError('Faltan datos obligatorios');
        die();
        }
        

        header("location: " .BASE_URL);

        
    }
}