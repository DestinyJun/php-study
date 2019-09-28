<?php
/**
 * Class BaseController 控制器基础类
 */
abstract class BaseController
{
  protected static $smarty = null;
  // 受保护的跳转方法
  protected function jump($message,$url='?',$time=2)
  {
    echo "{$message}";
    header("refresh:{$time};url=$url");
    die();
  }
  public function __construct()
  {
    self::$smarty = new Smarty();
    self::$smarty->left_delimiter = "{{";
    self::$smarty->right_delimiter = "}}";
  }
}
