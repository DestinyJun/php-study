<?php
// 类的自动加载
spl_autoload_register(function ($className) {
  $arr = ["./libs/$className.class.php"];
  foreach ($arr as $fileName) {
    if (file_exists($fileName)) require_once ($fileName);
  }
});
// 工厂模式案例开始,创建类的对象
$student1 = Factory::getInstance('Student');
$teacher1 = Factory::getInstance('Teacher');
