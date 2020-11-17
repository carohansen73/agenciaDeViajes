<?php

class ApiCommentsController{

    private $model;

    private $view;

    function __construct(){

        $this->model = new ApiModel();

        $this->view = ApiView();
        
    }

    public function getAll(){

        $this->model->getAll();
        
    }





}