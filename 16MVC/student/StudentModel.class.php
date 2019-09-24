<?php

/**
 *
 */
final class StudentModel
{
  private static $dsn = "mysql:host=localhost;port=3306;dbname=news;charset=utf8";
  private $pdo = null;
  public function fetchAll() {
    $sql_select = "SELECT * FROM news_list ORDER BY id DESC LIMIT 5";
    try {
      $PDOStatment = $this->pdo->query($sql_select);
      $row = $PDOStatment->fetchAll(2);
      return $row;
    } catch (PDOException $err) {
      file_put_contents(
        'D:\MyPhpstorm\phpstudy\16MVC\model\error.txt',
        date('Y-m-d H:i:s').'  '.($err->getMessage())."\r\n",
        FILE_APPEND
      );
      return [];
    }
  }
  public function fetchCount() {
    $sql_count = "SELECT COUNT(*) AS nums FROM news_list";
    try {
      $PDOStatment = $this->pdo->query($sql_count);
      $row = $PDOStatment->fetchAll(2);
      return $row[0]['nums'];
    } catch (PDOException $err) {
      file_put_contents(
        'D:\MyPhpstorm\phpstudy\16MVC\model\error.txt',
        date('Y-m-d H:i:s').'  '.($err->getMessage())."\r\n",
        FILE_APPEND
      );
      return [];
    }
  }
  public function fetchDelete($id) {
    $sql_count = "DELETE FROM news_list WHERE id = 84";
    return $this->pdo->exec($sql_count);
  }
  public function __construct()
  {
    $this->pdo = new PDO(self::$dsn,'root','root');
    $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  }
}
