<?php

/**
 * Class Mobile
 *
 * 构造方法（函数）：
 *  （1）当使用new 关键字，创建一个类的对象时，第一个自动调用的方法，
 * 就是构造方法，也即是构造函数
 *  （2）构造方法的名称是固定的：__construct()(js的没有下划线）
 *  （3）构造方法可以有参数，也可以没有参数
 *  （4）当new一个类时，类名后跟的小括号里面的参数，就是传给此类的构造函方法的。例如：new Student('张三','34')
 *  （5）构造方法的作用：对象初始化，例如：给私有属性赋值，数据库对象初始化（连通，选择数据库等）
 *  （6）一个类，只能有一个构造方法，当然构造方法可有可无
 *  （7）构造方法必须是成员方法，因此其也是有权限的
 *  （8）构造方法没有返回值，因为他是初始化对象用的
 *
 * 构造函数的语法格式：
 *  权限控制符 function __construct(形参1，形参2.....) { 对象初始化代码 }
 *
 * 提示：
 *  （1）在实际项目开发中，成员属性一般都是private、protected权限，很少有public
 *  （2）在项目中，成员属性一定没有值
 *  （3）在类中没有正在的数据，所有数据都是来自于外部，因为类就仅仅是一个工厂
 *
 * 析构方法：
 *  （1）当销毁一个对象前，自动调用的方法，就是析构方法
 *  （2）析构方法的名称也是固定的：__destruct()
 *  （3）析构方法一定没有参数，析构方法一定是成员方法（既然是成员方法，就一定有权限控制符）
 *  （4）析构方法的作用：主要用于垃圾回收。也有一些实际运用：开可以断开数据库连接、在线人数等
 *  （5）析构方法一定是公有的，因为对象即将销毁就要自动调用，如果是私有普，就没法调用了
 *
 * 析构方法的语法结构：
 *  权限控制符 function __destruct(){  垃圾回首代码以及其他功能代码 }
 */
class Mobile
{
  // 私有成员属性,私有成员不能从外部赋值，怎么办呢？构造函数解决问题
  private $name;
  private $brand;
  private $price;
  private $city;
  // 通过构造函数给私有成员属性赋值
  public function __construct($name1,$brand1,$price1,$city1){
    $this->name = $name1;
    $this->brand = $brand1;
    $this->price = $price1;
    $this->city = $city1;
  }
  // 析构方法
  public function __destruct(){
    // TODO: Implement __destruct() method.
    echo '我将要销毁';
  }

  //  共有成员方法
  public function showInfo() {
    $str = "手机名称:{$this->name}<br>";
    $str .= "手机品牌:{$this->brand}<br>";
    $str .= "手机价格:{$this->price}<br>";
    $str .= "销售城市:{$this->city}";
    echo $str;
  }
}
