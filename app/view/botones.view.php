<?php

require_once('libs/Smarty.class.php');

class BotonView{

  function mostrarBotones(){

        $smarty=new smarty();


        $smarty->display('templates/botones.tpl');
    }

  

}