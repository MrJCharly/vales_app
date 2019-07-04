<?php
  $host = 'localhost';
  $user = 'root';
  $pass = 'c4b4ll1t0';
  $db = 'vales_db';

  $conn = mysqli_connect($host, $user, $pass, $db);  

  if (mysqli_connect_errno()) {
    echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
  }
?>