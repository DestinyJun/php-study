<?php
abstract class Shop {
  public static function showInfo() {}
  abstract public function showInfo1(); // 抽象方法不能是静态方法，必须是成员方法
}
