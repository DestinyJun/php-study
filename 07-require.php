<?php
/**
 * Created by PhpStorm.
 * User: 42977
 * Date: 2018/11/16
 * Time: 23:19
 */
// require可以在当前脚本中引入另外的脚本并且执行
// require没调用一次都会载入对应的文件
require('config.php');
// 载入后只执行一次，如果之前载入过文件，就不会重复执行，有定于define，
//定义函数这种操作不能执行多次因此需要用require_once
// require有一个缺点，就是一旦导入的文件不存在，就会爆出致命错误，文件不再往下执行
// include的特点：载入文件不存在会报警告，不过文件会继续执行
require_once('config.php');
echo SYSTEM_NAME;