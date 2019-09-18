<?php

/**
 * 继承教师类
 */
// 类的自动加载
spl_autoload_register(function ($className) {
  $arr = ["./$className.class.php"];
  foreach ($arr as $fileName) {
    if (file_exists($fileName)) require_once ($fileName);
  }
});
class ItcastTeacher extends Teacher
{
 // 常量可以重写,因为常量是属于类的，每个类的产量都是单独存在，所以可以重写
  const TITLE = "我是继承的教师";
}
