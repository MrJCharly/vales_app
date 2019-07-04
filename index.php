<?php
  error_reporting(E_ALL); ini_set('display_errors', 1);
  list($controller, $action) = explode('/', $_GET['v']);

  $controllerClass = ucfirst($controller) . "Controller";
  $actionMethod = "action" . ucfirst($action);

  require_once "controller/$controllerClass.php";
  $ctrl = new $controllerClass();

  $ctrl->$actionMethod();
  //require_once
  //$view = $_GET['v'];
  //require_once "controller/main.php";
?>
