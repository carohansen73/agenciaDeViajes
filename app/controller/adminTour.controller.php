<?php
include_once 'app/view/adminTour.view.php';
include_once 'app/model/tour.model.php';


class AdminTourController{

    private $model;
    private $view;

    function __construct(){

        $this->model = new TourModel();
      
        $this->view = new AdminTourView();

    }

    function mostrarTabla(){
        
        $tours = $this->model-> obtenerTours();
        
        $this->view-> mostrarTablaTours($tours);
    }

    function insertarTour(){
        
        $destinos=$_POST['destinos'];
        $paquete=$_POST['paquete'];
        $itinerario=$_POST['itinerario'];
        $precio=$_POST['precio'];
        $id_region=$_POST['id_region'];

        if( empty ($destinos) || empty ($paquete)|| empty ($itinerario)|| empty ($precio)|| empty ($id_region)){
            $this->view->mostrarErrorTour('Faltan datos obligatorios');
            die();
        }
        $id=$this->model->insertarTour($destinos, $paquete,$itinerario,$precio,$id_region);

        /*header("location: " . BASE_URL . "region");*/
    }

    function eliminarTour($id){

        $this->model->borrarTour($id);
        /*header("location: " . BASE_URL . "region");*/
    }

   
}