<?php
/**
 * 静态延时绑定：
 *  （1）PHP5.3.0起新增了一个叫做后期静态绑定的功能，用于在继承范围内引用静态调用的类
 * 后期绑定的意思是：static::不在被解析为定义当前方法所在的类，而是在实际运算时计算的，
 * 也可以称之为静态绑定，因为它可以用于（但不限于）静态方法的调用
 *  （2）我们需要一个在调用执行时才确定当前类的一个特征，就是说将static关键字对某个类的绑定
 * 推迟到调用执行时，就叫做静态延时绑定！（说的是什么鬼）
 *  （3）语法：static::静态属性，静态方法，成员方法，类常量
 *  （4）如果只有一个类，self跟static都代表当前类
 *  （5）self永远指向的都是当前类
 *  （6）static指向的是那个类创建的对象，就是指向那个类，代表最后执行的那个类
 */
// 类的自动加载
spl_autoload_register(function ($className) {
  $arr = ["./libs/$className.class.php"];
  foreach ($arr as $fileName) {
    if (file_exists($fileName)) require_once ($fileName);
  }
});
//$teach = new Teacher();
$teach = new ItcastTeacher();
$teach->showInfo();
