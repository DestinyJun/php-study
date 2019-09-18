<?php
/**
 * Created by PhpStorm.
 * User: 42977
 * Date: 2019/9/18
 * Time: 17:03
 */

class Teacher
{
  private $name = '老师张丽';
  private $age = '38';
  public function __construct()
  {
    echo "{$this->name}的年龄：{$this->age}";
  }
}
