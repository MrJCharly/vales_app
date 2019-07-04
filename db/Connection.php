<?php
  class Connection {
    private static $host = 'localhost';
    private static $user = 'root';
    private static $pass = 'c4b4ll1t0';
    private static $db = 'vales_db';
    private static $conn = null;

    public static function getConnection() {
      if (Connection::$conn == null) {
        Connection::$conn = Connection::connect();
      }

      return Connection::$conn; 
    }

    private static function connect() {
      $conn = mysqli_connect(
        Connection::$host, 
        Connection::$user, 
        Connection::$pass, 
        Connection::$db);  

      if (mysqli_connect_errno()) {
        echo 'Failed to connect to MySQL: ' . mysqli_connect_error();die;
      }

      return $conn;
    }
  }
