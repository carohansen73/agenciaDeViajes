<?php

require_once('libs/Smarty.class.php');

class AdministradorView{

  function mostrarTablaRegiones($regiones){

        $smarty=new smarty();

        $smarty->assign('regiones', $regiones);

        $smarty->display('templates/administradorRegion.tpl');
    }

}