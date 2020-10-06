<?php
include_once('libs/Smarty.class.php');

class AuthView{

    function mostrarFormLogin() {
        
        $smarty = new Smarty();
        $smarty->display('templates/form_login.tpl');
    }


    function mostrarError($msg){
  
        echo "<h1>Error</h1>";
        echo "<h2> $msg</h2>";
    }


}
