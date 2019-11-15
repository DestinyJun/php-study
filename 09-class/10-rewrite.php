<?php
// 方法重写案例
require_once 'Computer.php';
$arr = ['name' => '机械革命S1','price' => 4999, 'amount' => 18, 'number' => 'GB00001'];
$computer1 = new Computer($arr);
// 对象是可以使用::语法调用静态属性和静态方法的
//$computer1::readMe();
Computer::readMe();
