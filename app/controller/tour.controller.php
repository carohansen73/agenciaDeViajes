<?php
include_once 'app/view/tour.view.php';
include_once 'app/model/tour.model.php';
class TourController{
    private $model;
    private $view;

    function __construct()
    {
        $this->model = new TourModel();
        $this->view = new TourView();
    }
    function mostrarTour($id){
        //obtendo las regiones de la BBDD
        $tour = $this->model-> obtenerTour($id);
        //mando las regiones a la funcion que las muestra
        $this->view-> mostrarTour($tour);
    }
    function insertarTour(){
    
        $destinos=$_POST['titulo'];
        $paquete=$_POST['descripcion'];
        $itinerario=$_POST['titulo'];
        $precio=$_POST['descripcion'];

    if( empty ($destinos) || empty ($paquete)|| empty ($itinerario)|| empty ($precio)){
    $this->view->mostrarErrorTour('Faltan datos obligatorios');
    die();
    }
    //$id=$this->model->insertTask($destinos, $paquete,$itinerario,$precio);

    header("location: " .BASE_URL);
    }

    function eliminarTour($id){

        $this->model->borrarTour($id);
        header("location: " .BASE_URL);
     }
}