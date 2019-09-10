<?php
/**
 * 商品：图书类
 */
require_once 'Commodity.php';
// 单继承至商品类，其父亲除=除了私有的属性跟方法外，其余的全部拿过来
class Book extends Commodity
{
  // 关于方法的继承后，如果对象调用可成员方法，有限执行本类中的方法，
  //没有了才去找其继承的父类中的方法（包括构造方法和析构方法）
  // 意思就是如果子类有了构造方法跟析构方法，那么继承过来的构造方法跟析构方法就会被覆盖
  public function showTime () {
    $str = "<br> 父类的常量：".parent::company;
    $str .= "<br>子类的常量：".self::company;
    $str .= "<br>父类的静态属性：".parent::$ems;
    $str .= "<br>子类的静态属性：".self::$ems;
    $str .= "<br>父类的静态方法：".parent::readMe();
    $str .= "<br>子类的静态方法：".self::readMe();
    $str .= "<br>父类的成员方法：".parent::showInfo();
    echo $str.DateTime::ATOM.__METHOD__;
  }
}
