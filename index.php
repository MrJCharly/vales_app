<?php
  require_once "db/connect.php";
  error_reporting(E_ALL); ini_set('display_errors', 1);
  
  $view = $_GET['v'];
  require_once "controller/main.php";
?>
