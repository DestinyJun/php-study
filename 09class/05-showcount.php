<?php
/**
 * 对象实现统计在线人数
 */
require_once './Student.php';
require_once './Person.php';
/*$student1 = new Student();
unset($student5);
$student1->showCount();*/
//$person = new Person('文君','28','男');
//echo '<pre>';
//var_dump($person);

// 值传递
/*$a = ['a'=>1,'b' =>2];
$b = $a;
$b['c'] = '3';
echo '<pre>';
print_r($a);
print_r($b);*/

// 引用传递 对象默认是引用传递
$person1 = new Person('文君','28','男', '100万');
$person2 = $person1;
$person2->money = '100000万';
echo '<pre>';
var_dump($person1);
var_dump($person2);
