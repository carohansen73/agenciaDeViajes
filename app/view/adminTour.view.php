<?php

require_once('libs/Smarty.class.php');

class AdminTourView{

    function mostrarTablaTours($tours){
       
        $smarty=new smarty();
        
        $smarty->assign('tours', $tours);
        
        $smarty->display('templates/mostrarTour.tpl');
    
            
    }
  
    function mostrarErrorTour($msg){/*muestro el error*/
  
      $smarty=new smarty();
     
      $smarty->assign('msg', $msg);
      
      $smarty->display('templates/mostrarTour.tpl');
  
  }

}
