<?php

/**
 *
 */
require_once './libs/Db.class.php';
final class UserModel
{
//  private static $dsn = "mysql:host=localhost;port=3306;dbname=news;charset=utf8";
//  private $pdo = null;
  private $db = null;
  public function fetchAll() {
    $sql_select = "SELECT id,name,age,sex,wage FROM user_list ORDER BY id DESC LIMIT 5";
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
    $sql_count1 = "DELETE FROM user_list WHERE id = $id";
    return $this->db->exec($sql_count1);
  }
  public function __construct()
  {
//    $this->pdo = new PDO(self::$dsn,'root','root');
//    $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $arr = array(
      'db_host' => 'localhost',
      'db_user' => 'root',
      'db_pass' => 'root',
      'db_name' => 'news',
      'charset' => 'utf8',
    );
    $this->db = Db::getInstance($arr);
  }
}
