<?php
include_once 'app/view/adminTour.view.php';
include_once 'app/model/tour.model.php';


class AdminTourController{

    private $model;
    private $view;
    private $authHelper;

    function __construct(){

        $this->model = new TourModel();
      
        $this->view = new AdminTourView();

        $this->authHelper = new AuthHelper();

        // verifico que el usuario esté logueado siempre
        $this->authHelper->chequearLogin();

    }

    function mostrarTabla(){
        
        $tours = $this->model-> obtenerTours();
        
        $this->view->mostrarTablaTours($tours);
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

        header("location: " . BASE_URL . "adminTour");
    }

    function eliminarTour($id){

        $this->model->borrarTour($id);
        header("location: " . BASE_URL . "adminTour");
    }

    function actualizarTour ($id){
       
        $tour=$this->model->detalleTour($id);
        
        $this->view-> mostrarTour($tour);

    }

    function actualizar (){

        $destinos=$_POST['destinos'];
        $paquete=$_POST['paquete'];
        $itinerario=$_POST['itinerario'];
        $precio=$_POST['precio'];
        $id_region=$_POST['id_region'];
        $id = $_POST['id'];

        if( empty ($destinos) || empty ($paquete)|| empty ($itinerario)|| empty ($precio)|| empty ($id_region)){
            $this->view->mostrarErrorTour('Faltan datos obligatorios');
            die();
        }
       
        $this->model->actualizarTour($destinos, $paquete, $itinerario,$precio,$id_region,$id);

        header("Location: " . BASE_URL . "adminTour");
    }

   
}