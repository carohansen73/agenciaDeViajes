<?php

require_once('libs/Smarty.class.php');

class AdminRegionView{

  function mostrarTablaRegiones($regiones){

        $smarty=new smarty();

        $smarty->assign('regiones', $regiones);

        $smarty->display('templates/adminRegion.tpl');
  }

  function mostrarRegion($region){
    $smarty=new smarty();

    $smarty->assign('region', $region);

    $smarty->display('templates/actualizarRegion.tpl');

    $smarty->assign('region', $region);

    $smarty->display('templates/form_actualizarRegion.tpl');

  }
}