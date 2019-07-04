<?php
  require_once "Controller.php";
  require_once "model/Ticketera.php";

  class TicketerasController extends Controller {

    public function actionAdmin() {
      $model = new Ticketera();
      $result = $model->findAll();  

      $this->render('ticketeras/admin', array(
        'result' => $result
      ));
    }
  }
?>