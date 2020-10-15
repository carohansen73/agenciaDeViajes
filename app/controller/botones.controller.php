<?php
include_once 'app/view/botones.view.php';
include_once 'app/helpers/auth.helper.php';

class BotonController{
    
    private $view;
    private $authHelper;

    function __construct(){
       
        $this->view = new BotonView();

        $this->authHelper = new AuthHelper();

        $this->authHelper->chequearLogin();
    }
        
    function mostrar(){

        $this->view-> mostrarBotones();

    }
     
}