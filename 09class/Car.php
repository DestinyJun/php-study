<?php
/**
 * 类的三（四）大特征：封装性、继承性、多态性、抽象性
 ********************************************************************
 * 类的封装性：
 *  （1）类得封装性，将敏感数据保护起来，不被外界访问
 *  （2）类得封装性再次理解：将一个功能的方方面面，封装成一个类，例如：数据库工具类，把敏感数据操作的
 * 所有反面全面封装到类中，因此，在该类外，不能再使用“mysqli_*”开头的函数
 *  （3）类得封装性实现，就是通过权限控制符来实现
 *  （4）在项目中和，所有的成员是属性，一般都是private、protected权限
 * *********************************************************************
 * 访问权限修饰符介绍：
 *  （1）public（公共权限）：在任何地方都可以被访问，主要是：类内、类外、子类中
 *  （2）protected（公受保护权限）：只能再本类、子类中被访问，在类外禁止访问
 *  （3）private（公受保护权限）：只能在本类被访问
 *  （4）成员属性、静态属性必须要加权限控制符，不能省略
 *  （5）成员方法、静态方法可以不加权限控制符，默认public，建议都要加权限
 */

class Car
{
  // 先想想有没有常量，有就先定义
  const COMPANY = '<h2>吉利</h2>';
  // 静态属性
  private static $count = 0;
  // 私有属性
  private $name;
  private $size;
  private $price;
  // 构造方法：对象初始化（一定是共有的，构造函数）
  public function __construct($arr)
  {
    $this->name = $arr['name'];
    $this->size = $arr['size'];
    $this->price = $arr['price'];
    self::$count++;
  }
  // 在定义一个静态方法返回一条线
  protected static function showLine()
  {
    return '<hr>';
  }
  // 定义一个公共的返回结果的函数
  public function showInfo()
  {
    $str = self::COMPANY;
    $str.= self::showLine();
    $str.= "车名：{$this->name}<br>";
    $str.= "尺寸：{$this->size}<br>";
    $str.= "价格：{$this->price}<br>";
    $str.= "库存：".self::$count."辆<br>";
    return $str;
  }
}
