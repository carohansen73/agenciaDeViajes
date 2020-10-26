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

    function agregarUsuario(){
        
        $email=$_POST['email'];
        $password=$_POST['password'];
      

        if( empty ($email) || empty ($password)){
            $usuario = $this->model-> obtenerUsuarios();
            $this->view->mostrarUsuario($usuario,'Error al ingresar datos');
            die();
        }
        $id = $this->model->insertarUsuario($email, $password);
        /*header("location: " . BASE_URL . "home");*/
    }
}