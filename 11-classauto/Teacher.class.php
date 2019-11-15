<?php
/**
 * Created by PhpStorm.
 * User: 42977
 * Date: 2019/9/13
 * Time: 23:02
 */

final class Teacher
{
  private $name = '张丽';
  private $school = '北京外语学院';
  public function __construct()
  {
    echo "{$this->name}老师毕业于{$this->school}";
  }
}
