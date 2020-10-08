<?php

require_once('libs/Smarty.class.php');

class AdminRegionView{

  function mostrarTablaRegiones($regiones){

        $smarty=new smarty();

        $smarty->assign('regiones', $regiones);

        $smarty->display('templates/administrador.tpl');
    }

}