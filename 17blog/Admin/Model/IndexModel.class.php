<?php
namespace Admin\Model {
  use \Frame\Libs\Db;
  class IndexModel
  {
    public $db = null;
    public function __construct()
    {
      $this->db = Db::getInstance();
    }
    public function fetchAll() {
      $sql_all = "SELECT * FROM user ORDER BY id DESC";
      return $this->db->fetchAll($sql_all);
    }
  }
}

