<?php
  class Register extends Controller{
    function __construct(){
      parent::__construct();
      $this->view->render('main/register');
    }

    function saludo(){
      echo "registrado";
      $this->model->insert();
    }
  }
?>
