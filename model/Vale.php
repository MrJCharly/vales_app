<?php
  require_once "Model.php";

  class Vale extends Model {
    public function getTableName() {
      return 'vales';
    }
  }