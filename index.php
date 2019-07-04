<?php
  //require_once "db/connect.php";
  error_reporting(E_ALL); ini_set('display_errors', 1);
  
  require_once "controller/TicketeraController.php";
  $ctrl = new TicketeraController();

  $ctrl->actionAdmin();
  //require_once
  //$view = $_GET['v'];
  //require_once "controller/main.php";
?>
