<?php
  class Login extends Controller{
    function __construct(){
      parent::__construct();
      $this->view->render('main/login');
    }

    function saludo(){
      echo "registrado";
      $this->model->insert();
    }
  }
?>
