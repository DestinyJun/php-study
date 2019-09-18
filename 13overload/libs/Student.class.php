<?php
/**
 * Created by PhpStorm.
 * User: 42977
 * Date: 2019/9/18
 * Time: 17:02
 */

final class Student
{
  private $name = '文君';
  private $age;
  // 私有的显示自我信息的方法
  private function showInfo() {
    echo "我被调用了";
  }
  // 在给不可访问的属性（private属性的值）赋值（很少用）
  public function __set($name, $value)
  {
    // TODO: Implement __set() method.
    $this->$name = $value;
  }
 // 读取不可访问属性的值时，__get() 会被调用
  public function __get($name)
  {
    // TODO: Implement __get() method.
    return $this->$name;
  }
  // 当对不可访问属性调用 isset() 或 empty() 时，__isset() 会被调用。
  public function __isset($name)
  {
    // TODO: Implement __isset() method.
    echo "不能对私有属性使用isset() 或 empty() ";
  }
  // 当对不可访问属性调用 unset() 时，__unset() 会被调用
  public function __unset($name)
  {
    // TODO: Implement __unset() method.
    echo "不能对私有属性使用__unset";
  }
  // 在对象中调用一个不可访问方法时，__call() 会被调用
  // $name：方法名 $arguments：参数数组
  public function __call($name, $arguments)
  {
    // TODO: Implement __call() method.
    echo "方法{$name}（".implode(',',$arguments)."）不存在或不可访问";
  }
  // 用静态方式调用一个不可访问方法时，__callStatic() 会被调用
  public static function __callStatic($name, $arguments)
  {
    // TODO: Implement __callStatic() method.
    echo "静态方法{$name}（".implode(',',$arguments)."）不存在或不可访问";
  }

  // 构造方法
  public function __construct()
  {
//    echo "{$this->name}的年龄：{$this->age}";
  }
}
