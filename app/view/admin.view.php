<?php

require_once('libs/Smarty.class.php');

class AdministradorView{

  function mostrarTabla($regiones){

        $smarty=new smarty();

        $smarty->assign('regiones', $regiones);

        $smarty->display('templates/administrador.region.tpl');
    }

  

}