<?
  require_once 'controller/error.php';

  class App{
    function __construct(){
      //get parameters
      $url = $_GET['url'];
      $url = rtrim($url, '/');
      $url = explode('/', $url);
      // var_dump($url);

      //select controller
      $selectController = 'controller/' . $url[0] . '.php';

      if(file_exists($selectController)){
        require_once $selectController;
        $controller = new $url[0];
      }else{
        $controller = new Errors();
      }
    }
  }
?>
