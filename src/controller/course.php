<?php
  class Course extends Controller{
    function __construct(){
      parent::__construct();
      $this->view->render('main/course');
    }

    function saludo(){
      echo "registrado";
      $this->model->insert();
    }
  }
?>
