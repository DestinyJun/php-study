<?php
/**
 * PHP重载（在类中）：
 *  （1）这路的重载，与“方法重载不是一回事儿”
 *  （2）方法重载，是指一个定义两个同名的方法，但是PHP不支持
 *  （3）PHP中的“重载”以其他绝大对数面向对象的语言不同，传统的“重载”是用于提供多个同名的类的方法
 * 但是各方法的参数类型和个数不同
 *  （4）PHP所提供的重载是指动态的“创建”类属性和方法。我们是通过魔术方法来实现的
 *  （5）当调用当前环境下未定义或不可见的类属性或方法时，重载方法会被调用
 *  （6）所有的重载方法都必须声明为public
 *  （7）属性重载只能在对象中进行，在静态方式中，这些魔术方法将不会被调用，所以这些方法都不能声明为static
 *  （8）这些魔术方法的参数都不能通过引用传递
 *  （9）重载所用到的魔术方法都是public
 *  （10）主要用于安全，不要暴漏关键错误,屏蔽系统错误
 *
 * 属性重载：
 *  （1）__set()：在给不可访问的属性（private属性的值）会被调用，语法：public __set(string $name,mixed $value)
 *  （2）__get()：读取不可访问属性的值时，__get() 会被调用，语法：public __get ( string $name ) : mixed
 *  （3）__isset()：当对不可访问属性调用 isset() 或 empty() 时，__isset() 会被调用。语法: public __isset ( string $name ) : bool
 *  （4）__unset()：当对不可访问属性调用 unset() 时，__unset() 会被调用。语法：public __unset ( string $name ) : void
 *
 *
 * 方法重载：
 *  （1）__call()：在对象中调用一个不可访问方法时，__call() 会被调用。语法：public __call ( string $name , array $arguments ) : mixed
 *  （2）用静态方式调用一个不可访问方法时，__callStatic() 会被调用，语法：public static __callStatic ( string $name , array $arguments ) : mixed
 *
 *
 *
 *
 */
// 类的自动加载
spl_autoload_register(function ($className) {
  $arr = ["./libs/$className.class.php"];
  foreach ($arr as $fileName) {
    if (file_exists($fileName)) require_once ($fileName);
  }
});
$student1 = new Student();
//$student1 ->name = '文君';
//$student1 ->age = '18';
//var_dump($student1);
//echo "{$student1->name}";
//echo isset($student1->name);
//unset($student1->name);
//$student1->showInfo('wenjun',15);
$student1::showInfo('wenjun',15);

