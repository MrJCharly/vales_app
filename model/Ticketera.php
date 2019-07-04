<?php
  require_once "db/connect.php";

  class Ticketera {    
    public function findAll() {
      $conn->query('select * from ticketeras');  
    }
  }
?>