<?php
/**
 * Created by PhpStorm.
 * User: 42977
 * Date: 2018/10/12
 * Time: 22:22
 */
// 需求，将文本文件读取呈现在表格中，几个步骤

// 1.读取文件内容 txt文件
$contents = file_get_contents('lib/names.txt');
// 2.按照一个特定的规则解析文件内容 =》 数组
// 定义一个空数组接受数据
$data = array();
$lines = explode("\n", $contents);
// 2.2 解析每一行的数据
foreach ($lines as $item) {
    // 去掉空行
    if($item === '') continue;
    $cols = explode('|', $item);
    // 往数组里面推送新的东西
    $data[] = $cols;
}
// 提供某种特定能力的事物，接口，就是有输入以及有输出，输出的形式有多种，可能时一种交互的方式
var_dump($data) ;
// 3.通过混编或者接口的方式返回数据
