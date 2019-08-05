<?php
/**
 * Created by PhpStorm.
 * User: 42977
 * Date: 2019/8/5
 * Time: 9:07
 */
date_default_timezone_set('PRC');
$filePath = 'test.txt';
$filePath2 = 'D:/MyPhpstorm/phpstudy/fileOperate/test.txt';
// 文件函数
$fileExists = file_exists($filePath);
$filTime = filemtime($filePath);
$fileSize= filesize($filePath);
$fileBasename= basename($filePath);
$fileRealpath = realpath($filePath);
var_dump($fileExists);
var_dump(date('Y-m-d H:i:s',$filTime));
var_dump($fileSize);
var_dump($fileBasename);
echo '<pre>';
print_r(pathinfo($filePath2));
var_dump($fileRealpath);
