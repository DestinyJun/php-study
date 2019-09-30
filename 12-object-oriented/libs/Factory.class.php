<?php
/**
 * Class Factory 工厂模式的最基础的案例
 * 这一个专门创建单例对象的工厂类
 */
final class Factory
{
  // 私有的静态的保存对象的属性
  private static $arr = array();
  // 公有的静态的创建对象的方法
  public static function getInstance($className) {
    // 判断当前类的对象是否存在
    if (!(isset(self::$arr[$className]))) {
      self::$arr[$className] = new $className();
    }
    // 如果存在，则返回当前类对象
    return self::$arr[$className];
  }
}
