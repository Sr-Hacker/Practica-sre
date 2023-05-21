<?
  class Main extends Controller{
    function __construct(){
      parent::__construct();
      $this->view->render('main/index');
      echo "main!";
    }

    function saludo(){
      echo "registrado";
      $this->model->insert();
    }
  }
?>
