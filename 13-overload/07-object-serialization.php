<?php
/**
 * 对象序列化
 *  （1）对象序列化的过程，与其他数据一样
 *  （2）当序列化对象时，PHP试图在序列化动作之前调用该对象的成员函数（魔术方法）
 * __sleep()，这样就允许对象在被序列化之前做任何清除操作
 *  （3）对象序列化的内容只能包含成员属性，不能包含常量、静态属性、成员方法、静态方法
 *  （4）__sleep()魔术方法可以用于清理对象，并返回一个包含对象作中所有应被序列化的变量名称的数组
 * 此魔术方法必须有返回值，且返回值是一个数组，否则报错
 *  （1）
 *  （1）
 */
// 类的自动加载
spl_autoload_register(function ($className) {
  $arr = ["./libs/$className.class.php"];
  foreach ($arr as $fileName) {
    if (file_exists($fileName)) require_once ($fileName);
  }
});
$teacher = new Teacher();
// 对象序列化
$str = serialize($teacher);
file_put_contents('D:\MyPhpstorm\phpstudy\13overload\objtest.txt',$str);
