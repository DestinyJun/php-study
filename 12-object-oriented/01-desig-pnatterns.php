<?php
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
