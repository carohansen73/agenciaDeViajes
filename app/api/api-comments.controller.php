<?php
require_once 'app/model/comentario.model.php';
require_once 'app/api/api.view.php';

class ApiCommentsController{

    private $model;
    private $view;

    function __construct(){
        $this->model = new ApiModel();
        $this->view = new ApiView();
        $this->data = file_get_contents("php://input");
    }
    
    //Funcion para convertir de string(la variable de entrada) a json
    function getData(){ 
        return json_decode($this->data); 
    }  

    function getAll(){
        $comentarios = $this->model->getAll();

      
        //$comentarios = $this->model->getAll(); //$this->model->getAll();
        $this->view->response($comentarios, 200);
    }

    function getAllByTour($params=null){
        //el router me manda un arreglo asociativo de parametros llamado $params, null por si no lo uso
        $id=$params[':IDTOUR'];

        $comentarios = $this->model->getAllByTour($id);
        
        $this->view->response($comentarios, 200);
        
    }

    function delete($params=null){
        $idComments= $params[':ID'];
        $success=$this->model->remove($idComments);

        if($success){
            $this->view->response("El comentario con el id = $idComments se elimino exitosamente", 200);
        }else{
            $this->view->response("Error al obtener el comentario id = $idComments, puede ser que no exista", 404);
        }
    }

    function add($params=null){

        session_start();
        $idUsuario = $_SESSION['ID_USUARIO'];
        
        $body = $this->getData();

        $texto = $body->texto;
        $calificacion = $body->calificacion;
        $id_tour = $body->id_tour;

        
        $id=$this->model->insert($texto,$calificacion,$id_tour,$idUsuario);

        if($id > 0){
           // $comentario = $this->model->get($id);
            $this->view->response("comentario ok",  200);
        }else{
            $this->view->response('Error al subir el comentario',500);
        }
        
    }   

    function get($params=null){
        //el router me manda un arreglo asociativo de parametros llamado $params, null por si no lo uso
        $id=$params[':ID'];
        $comentario = $this->model->get($id);
        //PARA VER SI EXISTE EL COMENTARIO, SINO 404 NOT FOUND
        if ($comentario){
            $this->view->response($comentario, 200);
        }else{
            $this->view->response("el comentario  con el id = $id no existe", 404);
        }
        
        //var_dump($id);
    }
    
    public function update($params=null){/*BORRAR*/
        $idComentario=$params[':ID'];
        $body = $this->getData();
        //var_dump($this->data);
        
        $texto = $body->texto;
        $calificacion= $body->calificacion;
        $idTour = $body->id_tour;

        $success = $this->model->update($idComentario, $texto, $calificacion, $idTour);
        if($success){
            $this->view->response("Se modifico el comentario  con el id = $idComentario, exitosamente", 200);
        }else {
            $this->view->response("el comentario no se pudo modificar", 500);
        }
    }

    public function showerror($params=null){
        $this->view->response("El recurso solicitado no existe", 404);
    }
}