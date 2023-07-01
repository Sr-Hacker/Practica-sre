<?php
  class Controller{
    function __construct(){
      $this->view = new View();
    }

    function loader_model($model){
      echo $model;
      $url = "model/".$model.".php";
      if(file_exists($url)){
        require $url;

        $modelName = $model."Model";
        $this->model = new $modelName();
      }
    }
  }
?>
