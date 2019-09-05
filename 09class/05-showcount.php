<?php
/**
 * 对象实现统计在线人数
 */
require_once './Student.php';
require_once './Person.php';
/*$student1 = new Student();
unset($student5);
$student1->showCount();*/
$person = new Person('文君','28','男');
//echo '<pre>';
//var_dump($person);

// 值传递
$a = 100;
$b = $a;
$a = 1000;
echo $a,','.$b;
