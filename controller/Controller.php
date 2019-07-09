<?php  

  class Controller {    

    public function render($view, $vars) {
      require_once "controller/main.php";
    }

    public function redirect($view) {
      header('Location: index.php?v=' . $view);
    }
  }
?>