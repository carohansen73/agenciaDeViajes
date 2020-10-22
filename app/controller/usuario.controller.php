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

    function insertarUser(){
        
        $email=$_POST['email'];
        $password=$_POST['password'];
      

        if( empty ($email) || empty ($password)){
          
            $this->view->mostrarMensaje('Error al ingresar datos');
            die();
        }
    
        /*header("location: " . BASE_URL . "home");*/
    }
}