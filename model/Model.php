<?php
  require_once "db/Connection.php";

  class Model {
    protected $conn;    
    
    public function __construct() {
      $this->conn = Connection::getConnection();
    }

    public function findAll() {
      return $this->conn->query('select * from ' . $this->getTableName());  
    }

    public function getTableName() {}
  }