<?php

require_once('libs/Smarty.class.php');

class RegionView{

    function mostrarRegiones($regiones){
      /*se crea un objeto smarty*/
      $smarty=new smarty();
      /*se le asigna el valor de tasks a la variable*/
      $smarty->assign('regiones', $regiones);
      /*se muestra en el archivo*/
      $smarty->display('templates/mostrarRegion.tpl');
    }

    function mostrarTour ($tours){
        
      $smarty=new smarty();
      
      $smarty->assign('tours', $tours);
      
      $smarty->display('templates/mostrarTour.tpl');
    
    }

    

}