<?php
  require_once "Model.php";

  class Ticketera extends Model {
    public function getTableName() {
      return 'ticketeras';
    }
  }