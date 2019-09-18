<?php
/**
 * Created by PhpStorm.
 * User: 42977
 * Date: 2019/9/18
 * Time: 17:02
 */

final class Student
{
  private $name = '学生文君';
  private $age = '18';
  public function __construct()
  {
    echo "{$this->name}的年龄：{$this->age}";
  }
}
