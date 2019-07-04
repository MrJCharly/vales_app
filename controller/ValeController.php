<?php
  require_once "Controller.php";
  require_once "model/Vale.php";

  class ValeController extends Controller {
    
    public function actionAdmin() {
      $model = new Vale();
      $result = $model->findAll();  

      $this->render('vale/admin', array(
        'result' => $result
      ));
    }
  }