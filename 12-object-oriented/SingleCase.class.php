<?php
/**
 * 单例模式的设计要求（三私一公）：
 *  （1）一私：私有的静态的保存对象的属性；
 *  （2）一私：私有的构造方法，阻止类外new对象；
 *  （3）一私：私有的克隆方法，阻止类外clone对象；
 *  （4）一公：共有的静态的创建对象的方法。（因为只能通过类目创建同一个对象，所以类型设计成静态的
 */

class SingleCase
{
  // 一私：私有的静态的保存对象的属性；
  private static $obj  = null;
  // 一私：私有的构造方法，阻止类外new对象；
  private function __construct() // 一私
  {
  }
  // 一私：私有的克隆方法，阻止类外clone对象；
  private function __clone() // 一私
  {
    // TODO: Implement __clone() method.
  }
  // 一公：共有的静态的创建对象的方法。（
  public static function getInstance()
  {
    // 判断当前对象是否存在
    if (!self::$obj instanceof self) {
      // 如果对象不存在，就创建他
      self::$obj = new self;
    }
    // 返回当前对象
    return self::$obj;
  }
}
