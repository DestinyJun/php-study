<?php
/**
 * Created by PhpStorm.
 * User: 42977
 * Date: 2018/10/17
 * Time: 9:56
 */
// 类型：1.索引数组 2.关联数组
// 方式：array()    2.[](PHP 5.4之后的版本才支持)
$dict = array(
    'hello' => '你好'
);
// 索引数组 下标可以不连续
$arr = [0,1,2,3];
$arr1 = array();
$arr1[0] = 1;
$arr1[1] = 2;
$arr1[2] = 3;
//echo array_keys($dict);
print_r($arr1);
print_r($arr);
// 2.关联数组
$arr4 = array('wenjun'=>'123','mali'=>'456');
print_r($arr4);
// 3.多维数组
$arr5 = array('wenjun'=>$arr4,'mali'=>$arr);
print_r('<pre>');
print_r($arr5);
print_r('</pre>');
print_r($arr5['wenjun']['wenjun']);
echo '<br/>';
// 获取数组长度
print_r(count($arr5));
