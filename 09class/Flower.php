<?php
/**
 * Created by PhpStorm.
 * User: 42977
 * Date: 2019/9/12
 * Time: 7:59
 */

require_once 'Plant.php';
final class Flower extends Plant{
  public function showInfo($name, $age)
  {
    // TODO: Implement showInfo() method.
    echo "{$name}的年龄是：{$age}<hr>";
  }
  public function readeMe()
  {
    // TODO: Implement readeMe() method.
    echo "这是成员方法".__METHOD__;
    echo "当前函数是".__FUNCTION__;
  }
}
