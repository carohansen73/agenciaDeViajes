<?php
//incluyo el router de la libreria
include_once 'libs/Router.php';
include_once 'app/api/ApiController.php';

//creo el nuevo router
$router = new Router();

//defino la tabla de ruteo (case)
$router->addRoute('comentarios', 'GET', 'ApiController', 'getAll');
$router->addRoute('comentarios/:ID', 'GET', 'ApiController', 'get');
$router->addRoute('comentarios/:ID', 'DELETE', 'ApiController', 'delete');

//rutear
$router->route($_REQUEST['resource'], $_SERVER['REQUEST_METHOD']);