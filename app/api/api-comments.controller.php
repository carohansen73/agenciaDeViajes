<?php
require_once 'app/model/api.model.php';
require_once 'app/api/api.view.php';

class ApiCommentsController{

    private $model;
    private $view;

    function __construct(){
        $this->model = new ApiModel();
        $this->view = new ApiView();
        $this->data = file_get_contents("php://input");
    }

    public function getAll(){

/*-----------SORT y ORDER-------------*/  

    /*    $parametros = [];

        if(isset($_GET['sort'])){
            $parametros['sort'] = $_GET['sort'];
        }
        if(isset($_GET['order'])){
            $parametros['order'] = $_GET['order'];
        }
        //print_r($parametros);
        //die();
        $comentarios = $this->model->getAll($parametros);
    */
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
            $this->view->response('El comentario se elimino exitosamente',200);
        }
        else{
            $this->view->response("Error al obtener el comentario id = $idComments, puede ser que no exista",404);
        }
    }

    public function add($params=null){
        $body = $this->getData();
        
        $comentario = $body->comentario;
        $calificacion= $body->calificacion;
        $idTour = $body->id_tour;

        $id = $this->model->insert($comentario, $calificacion, $idTour);
        if($id>0){
            $this->view->response("Se agrego el comentario  con el id = $id, exitosamente", 200);
        }else {
            $this->view->response("el comentario no se pudo insertar", 500);
        }
    }

    //Funcion para convertir de string(la variable de entrada) a json
    function getData(){ 
        return json_decode($this->data); 
    }  

    public function update($params=null){
        $idComentario=$params[':ID'];
        $body = $this->getData();
        //var_dump($this->data);
        
        $comentario = $body->comentario;
        $calificacion= $body->calificacion;
        $idTour = $body->id_tour;

        $success = $this->model->update($idComentario, $comentario, $calificacion, $idTour);
        if($success){
            $this->view->response("Se modifico el comentario  con el id = $idComentario, exitosamente", 200);
        }else {
            $this->view->response("el comentario no se pudo modificar", 500);
        }
    }
}