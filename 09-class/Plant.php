<?php
/**
 * 抽象类和抽象方法
 */

abstract class Plant
{
  const ADDRESS = '地球';
  // 抽象方法
  abstract public function showInfo($name,$age);
  abstract public function readeMe();
}

