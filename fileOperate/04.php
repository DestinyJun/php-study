<?php
/**
 * Created by PhpStorm.
 * User: 42977
 * Date: 2019/8/5
 * Time: 23:15
 */
$filename = 'D:/MyPhpstorm/phpstudy/fileOperate/test.txt';
// copy 用以复制一个文件，复制文件时可以改名
//$return = copy($filename,'D:/MyPhpstorm/phpstudy/fileOperate/test_copy.txt');
//var_dump($return);

//删除文件
//$return = unlink('D:/MyPhpstorm/phpstudy/fileOperate/test_copy.txt');
//var_dump($return);

// 区分是文件还是文件夹,或者判断文件是否存在
$return = is_file('D:/MyPhpstorm/phpstudy/fileOperate/test.txt');
var_dump($return);

