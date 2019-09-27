<?php
/**
 * 用户数据模型类
 */
final class UserModel extends BaseModel
{
  //  private static $dsn = "mysql:host=localhost;port=3306;dbname=news;charset=utf8";
  //  private $pdo = null;
  public function fetchAll() {
    $sql_select = "SELECT id,name,age,sex,wage FROM user_list ORDER BY id DESC LIMIT 20";
    return $this->db->fetchAll($sql_select);
    /*try {
      $PDOStatment = $this->pdo->query($sql_select);
      $row = $PDOStatment->fetchAll(2);
      return $row;
    }
    catch (PDOException $err) {
      file_put_contents(
        'D:\MyPhpstorm\phpstudy\16MVC\model\error.txt',
        date('Y-m-d H:i:s').'  '.($err->getMessage())."\r\n",
        FILE_APPEND
      );
      return [];
    }*/
  }
  public function fetchCount() {
    $sql_count = "SELECT id FROM user_list";
    return $this->db->rowCount($sql_count);
    /*try {
      $PDOStatment = $this->pdo->query($sql_count);
      $row = $PDOStatment->fetchAll(2);
      return $row[0]['nums'];
    }
    catch (PDOException $err) {
      file_put_contents(
        'D:\MyPhpstorm\phpstudy\16MVC\model\error.txt',
        date('Y-m-d H:i:s').'  '.($err->getMessage())."\r\n",
        FILE_APPEND
      );
      return [];
    }*/
  }
  public function fetchDelete($id) {
    $sql_delete = "DELETE FROM user_list WHERE id = $id";
    return $this->db->exec($sql_delete);
  }
  public function fetchInsert($arr) {
    $str = '';
    foreach ($arr as $key=>$value) {
      $str .= "'$value',";
    }
    $str = rtrim($str,',');
    $sql_insert = "INSERT INTO user_list VALUES(DEFAULT,{$str})";
    return $this->db->exec($sql_insert);
  }
  public function fetchOne($id) {
    $sql_one = "SELECT * FROM user_list WHERE id = {$id} LIMIT 1";
    return $this->db->fetchOne($sql_one,1);
  }
  public function fetchUpdate($arr,$id) {
    $str = '';
    foreach ($arr as $key=>$value) {
      $str .= "$key='$value',";
    }
    $str = rtrim($str,',');
    $sql_update = "UPDATE  user_list SET {$str} WHERE id = {$id}";
    return $this->db->exec($sql_update);
}
}
