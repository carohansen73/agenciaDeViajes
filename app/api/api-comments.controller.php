<?php
include_once 'api.view.php';

class ApiCommentsController{

    private $model;

    private $view;

    function __construct(){

        $this->model = new ApiModel();

        $this->view = new ApiView();
        
    }

    public function getAll(){

        $this->model->getAll();
        
    }
    function get($params=null){
        //el router me manda un arreglo asociativo de parametros llamado $params, null por si no lo uso
        $id=$params[':ID'];
        $comentario = $this->model->get($id);
        //PARA VER SI EXISTE EL COMENTARIO, SINO 404 NOT FOUND
        if ($comentario){
            $this->view->response($comentario, 200);
        }else{
            $this->view->response("la tarea con el id = $id no existe", 404);
        }
    }


}