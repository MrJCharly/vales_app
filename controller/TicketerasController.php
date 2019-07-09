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

    public function actionCreate() {
      $model = new Ticketera();

      if (isset($_POST['Ticketera'])) {
        $model->setAttributes($_POST['Ticketera']);
        $model->save();
        
        $this->redirect('ticketeras/admin');
      }

      $this->render('ticketeras/create', array());
    }
  }
?>