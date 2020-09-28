<?php
include_once 'agencia.view.php';
include_once 'agencia.model.php';

class AgenciaController{

    private $model;
    private $view;

    function __construct()
    {
        $this->model = new AgenciaModel();
        $this->view = new AgenciaView();
    }

    function mostrarRegion(){
        //obtendo las regiones de la BBDD
        $regiones = $this->model-> obtenerRegiones();
        //mando las regiones a la funcion que las muestra
        $this->view-> mostrarRegiones($regiones);
    }
    
    function mostrarTour($id){
        //obtendo las regiones de la BBDD
        $tour = $this->model-> getTour($id);
        //mando las regiones a la funcion que las muestra
        $this->view-> showTour($tour);
    }

}