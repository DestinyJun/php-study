<?php
/**
 *  接口技术：
 *  （1）PHP只支持单继承，只能从一个父类来继承功能，如果PHP同时想从多个父类来继承功能
 * 就可以用接口技术来实现
 *  （2）接口也是之类中方法的命名规范
 *  （3）接口就是“特殊”的抽象类
 *
 * 接口定义的实现要点：
 *  （01）interface关键字，用来声明一个接口，接口是一种特殊的抽象类
 *  （02）implements关键字，创建一个子类，来实现接口
 *  （03）同类的东西，使用extends（继承）关键字，不同类的东西，使用implements关键字
 * 例如：子类“继承（extends）父类”、接口“继承（extends）”接口、类“实现（implements）接口”
 *  （04）接口中只能存在两样东西：类常量、抽象方法
 *  （05）接口中的方法，默认都是抽象方法，因此，不需要加【abstract】,也不能加static，因为抽象方法不能是静态方法
 *  （06）接口中方法的权限，必须是public
 *  （07）接口中的方法可以是静态方法，可以是成员方法（而抽象类中的方法不能是静态方法，只能是成员方法）
 *  （08）抽象类也是可以实现接口的
 *  （09）接口中的所有抽象方法，在子类中必须要重写
 *  （10）PHP中的“重写”，不一定是方法重写，还可以是常量重写、静态是属性重写、静态方法重写
 *  （11）重写权限必须要够，否则没法重写
 *  （12）接口中的常量是不能重写的
 *  （13）接口继承接口时不需要重写的里面的抽象方法
 *  （14）在项目的层级设计构架是：接口(目的实现合作开发，对所有的方法和功能进行规划以及方法的命名规范）->
 * 类（用来实现或重写接口中的各种功能和方法）->对象（使用类中的方法使用功能）
 *
 *
 */

// 支付接口
interface Pay
{
  const TITLE = '这是一个支付接口';
  public function showInfo($a,$b);
}
// 随便的一个接口
interface Abc {
  public static function readeMe();
}

// 创建抽象类，并实现多个接口
abstract class Person implements Pay,Abc
{
  abstract public function alterMe();
  public function showInfo($a, $b)
  {
    // TODO: Implement showInfo() method.
  }

  public static function readeMe()
  {
    // TODO: Implement readeMe() method.
  }
}
// 创建最终类，继承抽象类
final class AsiaPerson extends Person
{

  public function alterMe()
  {
    // TODO: Implement alterMe() method.
  }
}
