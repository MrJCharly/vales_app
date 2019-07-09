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

    public function setAttributes($data) {      
      foreach ($data as $field => $value) {
        $this->$field = $value;
      }
    }

    public function save() {
      $tableName = $this->getTableName();
      $fields = implode(',', $this->getFields());
      $values = $this->getValuesString();
      $query = "insert into $tableName ($fields) values ($values)";

      if (!$this->conn->query($query)) {
        throw new Exception("Error: " . $this->conn->error);
      }      
    }

    public function getValuesString() {
      $values = array();
      $fields = $this->getFields();

      foreach ($fields as $field) {
        $values[] = $this->$field;
      }

      return implode(',', $values);
    }

    public function getFields() { return array(); }

    public function getTableName() {}
  }