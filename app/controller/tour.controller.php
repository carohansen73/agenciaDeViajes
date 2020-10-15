<?php
include_once 'app/view/tour.view.php';
include_once 'app/model/tour.model.php';

class TourController{
    private $model;
    private $view;

    function __construct(){
        
        $this->model = new TourModel();

        $this->view = new TourView();
    }

    function mostrarTour($id){
        
        $tour = $this->model-> obtenerTour($id);
       
        $this->view-> mostrarTours($tour);

    }

    function detalleUnTour($id){

        $tour = $this->model->detalleTour($id);
       
        $this->view->mostrarUnTours($tour);

                
}
     
}