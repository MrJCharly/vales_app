<?php
  require_once "Controller.php";

  class TicketeraController extends Controller {

    public function actionAdmin() {
      $this->render('admin', array(
        'items' => array()
      ));
    }
  }
?>