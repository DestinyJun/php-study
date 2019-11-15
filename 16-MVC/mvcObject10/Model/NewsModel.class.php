<?php
/**
 * 新闻数据模型类
 */
final class NewsModel extends BaseModel
{
//  private static $dsn = "mysql:host=localhost;port=3306;dbname=news;charset=utf8";
//  private $pdo = null;
  public function fetchAll() {
    $sql_select = "SELECT id,news_title,idt FROM news_list ORDER BY id DESC LIMIT 5";
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
    $sql_count = "SELECT id FROM news_list";
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
    $sql_count1 = "DELETE FROM news_list WHERE id = $id";
    return $this->db->exec($sql_count1);
  }
}
