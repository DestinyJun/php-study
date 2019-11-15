<?php
/**
 * 对象克隆
 *
 * 创建对象的方式：
 *  （1）new关键字创建新对象
 *  （2）使用clone关键字创建新都对象
 */
// 类的自动加载
spl_autoload_register(function ($className) {
  $arr = ["./$className.class.php"];
  foreach ($arr as $fileName) {
    echo $className;
    if (file_exists($fileName)) require_once ($fileName);
  }
});
// new 关键字
$student1 = new Student();
/**
 * clone 关键字创建对象
 *  （1）在类中有一个魔术方法__clone，但对象被clone时会自动调用
 *  （2）魔术方法__clone只能是publi权限，跟构造函数一样，否则无法自动调用就会报错
 */
$student2 = clone $student1;
echo '<pre>';
var_dump($student1,$student2);
