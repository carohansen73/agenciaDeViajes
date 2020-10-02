<?php

require_once('libs/Smarty.class.php');

class TourView{

    function mostrarTour($tasks){
       
        $smarty=new smarty();
        
        $smarty->assign('tasks', $tasks);
        
        $smarty->display('templates/mostrarTour.tpl');
    
            
    }

    function mostrarErrorTour($msg){/*muestro el error*/

        $smarty=new smarty();
       
        $smarty->assign('msg', $msg);
        
        $smarty->display('templates/mostrarTour.tpl');
  
    }


}