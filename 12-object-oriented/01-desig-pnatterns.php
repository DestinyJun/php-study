<?php
/**
 * 面向对象设计模式：
 *  （1）就是面向对象代码设计经验的总结
 *  （2）可以实现代码重用、节省时间、对于后期维护十分方便
 *
 * 常用的设计设计模式：
 *  （1）单例模式：一个类只能创建 一个对象，不管用什么办法，都无法创建第二个对象
 *  （2）工厂模式：根据传递的不同类名，来创建不同类的对象的工厂
 *
 * 单例模式的设计要求（三私一公）：
 *  （1）一私：私有的静态的保存对象的属性；
 *  （2）一私：私有的构造方法，阻止类外new对象；
 *  （3）一私：私有的克隆方法，阻止类外clone对象；
 *  （3）一公：共有的静态的创建对象的方法。（因为只能通过类目创建同一个对象，所以类型设计成静态的
 */
// 单例案例：
spl_autoload_register(function ($className) {
  // 定义所需要的类文件的路径数组
  $arr = [
    "./$className.class.php",
  ];
  // 循环判断类文件路径是否存在，存在就加载
  foreach ($arr as $filename) {
    if (file_exists($filename)) require_once ($filename);
  }
});
$obj1 = SingleCase::getInstance();
$obj2 = SingleCase::getInstance();
var_dump($obj1,$obj2);
