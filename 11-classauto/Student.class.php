<?php
/**
 *
 */

final class Student
{
  public $heighr = '178';
  private $name = '文君';
  private $age = 18;
  public function __construct()
  {
    echo "{$this->name}同学的年龄是：{$this->age}<br>";
  }
  public function __clone()
  {
    // TODO: Implement __clone() method.
    $this->name = '王大军';
    $this->age = 38;
  }
  // 在类的内部便遍历对象
  public function showAllAttrs() {
    foreach ($this as $k=>$v) {
      echo "\$obj->$k=$v<br>";
    }
  }
}
