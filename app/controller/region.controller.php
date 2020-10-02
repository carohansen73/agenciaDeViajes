<?php
include_once 'app/view/region.view.php';
include_once 'app/model/region.model.php';

class RegionController{

    private $model;
    private $view;

    function __construct(){

        $this->model = new RegionModel();
        $this->view = new RegionView();
    }

    function mostrarRegion(){
        
        $regiones = $this->model-> obtenerRegiones();
        
        $this->view-> mostrarRegiones($regiones);
    }
    
}