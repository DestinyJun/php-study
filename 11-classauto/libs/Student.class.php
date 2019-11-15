<?php
/**
 *
 */

final class Student
{
  private $name = '文君';
  private $age = 18;
  public function __construct()
  {
    echo "{$this->name}同学的年龄是：{$this->age}<br>";
  }
}
