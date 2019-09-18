<?php
/**
 * 序列化：
 *  （1）解决PHP变量传给js（或其他应用程序语言）使用的问题
 *  （2）变量序列化：将变量转成可存储的或传输的字符串的过程，会保留变量的类型和结构
 *  （3）变量反序列化：将序列化的字符串，再还原成原始变量
 *  （4）除了资源变量外，其他变量都可以序列化（资源类型就是一个地址，没有东西）
 *  （5）序列化用到的函数：serialize、unserialize
 *  （6）serialize — 产生一个可存储的值的表示
 *  （7）unserialize — 从已存储的表示中创建 PHP 的值
 *  （3）
 */

// 变量序列化
$arr = [
  'name' => '文君',
  'age' => '18',
  'sex' => '男',
];
$str = serialize($arr);
file_put_contents('D:\MyPhpstorm\phpstudy\13overload\test.txt',$str);


