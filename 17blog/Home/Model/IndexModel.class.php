<?php
/**
 * 首页数据模型类
 */
namespace Home\Model{
  use \Frame\Libs\BaseModel;
  final class IndexModel extends BaseModel
  {
    // 查询多条数据
    public function fetchAll() {
      $sql_all = "SELECT * FROM user ORDER BY id DESC";
      return $this->pdoPro->fetchAll($sql_all);
    }
    // 查询一条数据
    public function fetchOne() {
      $sql_all = "SELECT * FROM user ORDER BY id DESC";
      return $this->pdoPro->fetchOne($sql_all);
    }
    // 执行增删改SQL语句
    public function fetchDelete($id) {
      $sql_delete = "DELETE FROM user WHERE id = {$id}";
      return $this->pdoPro->exec($sql_delete);
    }
    // 获取记录数
    public function fetchRecode() {
      $sql_all = "SELECT * FROM user ORDER BY id DESC";
      return $this->pdoPro->fetchRecord($sql_all);
    }
  }

}
