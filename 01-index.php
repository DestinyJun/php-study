<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/1 0001
 * Time: 20:45
 */
/**php的输出方式有三种**/
// 第一种
echo 'hello word<br/>';

//第二种
print 'hello world 2<br/>';

// 第三种，有一个函数的方式,还能打印出数据类型，能够打印出有结构的数据，一般用在调试的时候
var_dump('hello world 3');

// if语句
$a = 'wenjun';
$a = 1;
$arr = [1,2,3]; // 跟js一样声明一个数组
var_dump($a);