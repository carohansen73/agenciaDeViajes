<?php

include_once 'app/controller/region.controller.php';
include_once 'app/controller/tour.controller.php';
include_once 'app/controller/administrador.controller.php';


// defino la base url para la construccion de links con urls semánticas
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; // acción por defecto si no envían
}

// parsea la accion Ej: suma/1/2 --> ['suma', 1, 2]
$params = explode('/', $action);

// determina que camino seguir según la acción
switch ($params[0]) {
    /*case 'iniciar':
        $controller= new AuthController();
        $controller->iniciarSecion();
    break;*/
    case 'home':
        $controller = new RegionController();
        $controller->mostrarRegion();
    break;
    case 'region':
        if (isset($params[1]))
            $id=$params[1];
            $controller =new TourController();
            $controller->mostrarTour($id);
    break;  
    case 'insertarTour':
        $controller =new TourController();
        $controller->insertarTour();
    break;  
    case 'administrador':
        $controller = new AdministradorController();
        $controller->mostrarTabla();
    break;
    case 'InsertarRegion':
        $controller =new AdministradorController();
        $controller->insertarRegion();
    break;  
    case 'eliminarRegion':
        $controller =new AdministradorController();
        $id=$params[1];
        $controller->eliminarRegion($id);
    break;  
    default:
        echo('404 Page not found');
        break;
}