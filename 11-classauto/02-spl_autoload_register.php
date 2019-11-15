<?php
/**
 * 自定义类文件加载函数spl_autoload_register()【主要运用在项目中】：
 *  （1）__autoload()有点局限性，如果类文件位于不同德目录，类文件命名方式也不尽相同，就不够用了
 * 每个脚本中只能调用一次
 *  （2）spl_autoload_register()可以注册多个类加载函数，形成一个类文件队列，按照注册时的顺序依次
 * 执行，那个类文件存在，就包含那个类文件
 *  （3）每个函数就是一种类文件加的加载规则
 *
 * spl_autoload_register()语法格式：
 *  （1）spl_autoload_register(function)，其参数是一个函数，此函数其实就是__autoload()函数，也即是加载规则，
 * 且同一个脚本中可以调用多个spl_autoload_register函数
 *  （2）可以使用匿名函数作为参数的形式
 *
 *
 */
// 使用函数作为参数 --第一种写法
/*spl_autoload_register('fun1');
spl_autoload_register('fun2');
// 第一种加载 规则......
function fun1($className) {
  echo $className;
  // 构建类文件的真实路径
  $fileName = "./libs/$className.class.php";
  // 判断并包含类文件代码
  if (file_exists($fileName)) require_once ($fileName);
}
function fun2($className) {
  // 构建类文件的真实路径
  $fileName = "./public/$className.class.php";
  // 判断并包含类文件代码
  if (file_exists($fileName)) require_once ($fileName);
}
// 创建学生类对象
$student1 = new Student();
// 创建教师类对象
$teacher1 = new Teacher();*/

// 使用匿名函数作为参数  --第二种写法,这种写法在项目中使用频率较高
spl_autoload_register(function ($className) {
  // 定义所需要的类文件的路径数组
  $arr = [
    "./libs/$className.class.php",
    "./public/$className.class.php",
  ];
  // 循环判断类文件路径是否存在，存在就加载
  foreach ($arr as $filename) {
    if (file_exists($filename)) require_once ($filename);
  }
});
// 创建学生类对象
$student1 = new Student();
// 创建教师类对象
$teacher1 = new Teacher();

