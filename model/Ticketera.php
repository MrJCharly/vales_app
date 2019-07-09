<?php
  require_once "Model.php";

  class Ticketera extends Model {
    protected $nro;
    protected $id_proveedor;

    public function getTableName() {
      return 'ticketeras';
    }

    public function getFields() {
      return array('nro', 'id_proveedor');
    }
  }