<?php
require_once 'app/model/api.model.php';
require_once 'app/api/api.view.php';

class ApiCommentsController{

    private $model;

    private $view;

    function __construct(){

        $this->model = new ApiModel();

        $this->view = new ApiView();
        
    }

    public function getAll(){//FUNCIONA

        $comentarios=$this->model->getAll();
       
        $this->view->response($comentarios,200);
        
    }

    function get($params=null){
        //el router me manda un arreglo asociativo de parametros llamado $params, null por si no lo uso
        $id=$params[':ID'];

        $comentario = $this->model->get($id);
     
        //PARA VER SI EXISTE EL COMENTARIO, SINO 404 NOT FOUND
        if ($comentario){
            $this->view->response($comentario, 200);
        }else{
            $this->view->response("El comentario con el id = $id no existe", 404);
        }
    }

    function delete($params=null){

        $idComments= $params[':ID'];

        $comentario=$this->model->remove($idComments);

        if($comentario){
            $this->view->response('El comentario se elimino exictosamente',200);
        }
        else{
            $this->view->response("Error al obtener el comentario id = $idComments, puede ser que no exista",404);
        }
    }


}