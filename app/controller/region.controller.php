<?php
include_once 'app/view/region.view.php';
include_once 'app/model/region.model.php';

class RegionController{

    private $model;
    private $view;

    function __construct()
    {
        $this->model = new RegionModel();
        $this->view = new RegionView();
    }

    function mostrarRegion(){
        //obtendo las regiones de la BBDD
        $regiones = $this->model-> obtenerRegiones();
        //mando las regiones a la funcion que las muestra
        $this->view-> mostrarRegiones($regiones);
    }
    
   

    

}