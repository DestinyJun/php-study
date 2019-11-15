<?php
/**
 * Created by PhpStorm.
 * User: 42977
 * Date: 2019/9/18
 * Time: 17:03
 */

class Teacher
{
  const TITLE = "我是一个老师";
  private $name = '老师张丽';
  private $age = '38';
  private $sex = '男';
  private $height = '180';
  public function __construct()
  {
//    echo "{$this->name}的年龄：{$this->age}";
  }
  // 静态延时绑定的使用
  public function showInfo() {
    echo "第一种输出常量的方法：".self::TITLE;
    echo "<br>第二种输出常量的方法：".static::TITLE;
  }
  // 在对象序列化前自动调用
  public function __sleep()
  {
    // TODO: Implement __sleep() method.
    // 返回需要序列化的属性,必须有返回值，否则报错
    return array('name','age');
  }
  // 在对象反序列化成功重构后自动执行此方法，进行对象的初始化工作
  public function __wakeup()
  {
    // TODO: Implement __wakeup() method.
    echo '我执行了';
  }
}
