<?php
namespace Admin\Model{
  use Frame\Libs\BaseModel;
  final class UserModel extends BaseModel
  {
    private $table = 'user';
    public function fetchAll() {
      $sql_all = "SELECT * FROM {$this->table} ORDER BY id DESC";
      return $this->pdoPro->fetchAll($sql_all);
    }
    public function fetchOne($where = "2>1") {
      $sql_one = "SELECT * FROM {$this->table} WHERE $where";
      return $this->pdoPro->fetchOne($sql_one);
    }
    public function fetchDelete($id) {
      $sql_delete = "DELETE FROM {$this->table} WHERE id = {$id}";
      return $this->pdoPro->exec($sql_delete);
    }
    public function fetchAdd($id) {
      $sql_delete = "DELETE FROM {$this->table} WHERE id = {$id}";
      return $this->pdoPro->exec($sql_delete);
    }
    public function fetchInsert($arr) {
      $files = '';
      $values = '';
      foreach ($arr as $key=>$value) {
        $files .= $key.',';
        $values .= "'$value',";
      }
      $files = rtrim($files,',');
      $values = rtrim($values,',');
      $sql_insert = "INSERT INTO {$this->table}($files) VALUES($values)";

      return $this->pdoPro->exec($sql_insert);
    }
    public function fetchCount($where = "2>1") {
      $sql_count = "SELECT * FROM {$this->table} WHERE {$where}";
      return $this->pdoPro->fetchRecord($sql_count);
    }
    public function fetchUpdate($arr,$id) {
      $str = '';
      foreach ($arr as $key=>$value) {
        $str.= "$key = '{$value}',";
      }
      $str = rtrim($str,',');
      $sql_update = "UPDATE user SET {$str} WHERE id = {$id}";
      return $this->pdoPro->exec($sql_update);
    }
  }
}
