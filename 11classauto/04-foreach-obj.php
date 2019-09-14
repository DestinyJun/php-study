<?php
/**
 * 遍历对象属性：
 *  （1）在类的内部遍历属性，可以拿到对象的所有权限的属性
 *  （2）在类的外部遍历属性，只能拿到对象的public权限的属性
 */
// 类的自动加载
spl_autoload_register(function ($className) {
  $arr = ["./$className.class.php"];
  foreach ($arr as $fileName) {
    echo $className;
    if (file_exists($fileName)) require_once ($fileName);
  }
});
$student1 = new Student();
// 在类外遍历对象
foreach ($student1 as $k=>$v) {
  echo "\$obj->$k=$v";
}
echo "<hr>";
$student1->showAllAttrs();

