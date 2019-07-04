<?php  

  class Controller {
    protected $params;

    public function render($view, $params) {      
      $this->params = $params;
      //include("view/$view.php");
      require_once "controller/main.php";
    }
  }
?>