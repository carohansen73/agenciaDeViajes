<?php

require_once('libs/Smarty.class.php');

class AdminTourView{
      
    function mostrarTablaTours($tours){
     
        $smarty=new smarty();
        
        $smarty->assign('tours', $tours);
        
        $smarty->display('templates/adminTour.tpl');
    
    }
    function mostrarTour($tour){

      $smarty=new smarty();
  
      $smarty->assign('tour', $tour);
  
      $smarty->display('templates/actualizarTour.tpl');
     

    }
    
    /*function mostrarTourDos($tour){ 

      $smarty=new smarty();

      $smarty->assign('tour', $tour);
  
      $smarty->display('templates/form_actualizarTour.tpl');

    }*/
  
  
  function mostrarErrorTour($msg){/*muestro el error*/

    $smarty=new smarty();
    
    $smarty->assign('msg', $msg);
    
    $smarty->display('templates/mostrarTour.tpl');

  }

}