<?php
include_once 'app/view/adminRegion.view.php';
include_once 'app/model/region.model.php';
include_once 'app/helpers/auth.helper.php';


class AdminRegionController{

    private $model;
    private $view;
    private $authHelper;

    function __construct(){

        $this->model = new RegionModel();
        $this->view = new AdminRegionView();

        $this->authHelper = new AuthHelper();

        // verifico que el usuario esté logueado siempre
        $this->authHelper->chequearLogin();
    }

    function mostrarTabla(){
        
        $regiones = $this->model-> obtenerRegiones();
        $this->view-> mostrarTablaRegiones($regiones);
    }
    
    function insertarRegion(){
        $nombre = $_POST['nombre'];
        $informacion = $_POST['informacion'];

        if(empty($nombre) || empty($informacion)){
            echo "<h2>ERROR , Faltan datos </h2>";
            die();
        }

        $id = $this->model->insertarRegion($nombre, $informacion);
         // redirigimos al  la tabla
         header("Location: " . BASE_URL . "administrador"); 
    }
    
    function eliminarRegion($id){
        $this->model->eliminarRegion($id);
        header("Location: " . BASE_URL . "administrador");
    }

    function actualizarRegion ($id){
        $nombre = $_POST['nombre'];
        $informacion = $_POST['informacion'];

        if(empty($nombre) || empty($informacion)){
            echo "<h2>ERROR , Faltan datos </h2>";
            die();
        }

        $this->model->actualizarRegion($id, $nombre, $informacion);
        header("Location: " . BASE_URL . "administrador"); 
    }

    
}