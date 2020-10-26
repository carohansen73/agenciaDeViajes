<?php

require_once('libs/Smarty.class.php');

class UsuarioView{

    function mostrarUsuario($usuario,$error=null){

        $smarty=new smarty();

        $smarty->assign('usuario', $usuario);
    
        $smarty->assign('error', $error);
    
        $smarty->display('templates/usuario.tpl');


    }

     

}