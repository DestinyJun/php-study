<?php
/**
 * Created by PhpStorm.
 * User: 42977
 * Date: 2019/8/1
 * Time: 10:31
 */
require_once '../tool/get_rand_str.php';
require_once '../tool/upload_file.php';
$errorInfo = [
  '1000' => '图片上传成功',
  '1001' => '文件大小超出php_ini中的限制',
  '1002' => '文件大小超html限制',
  '1003' => '文件文件上传不完整',
  '1004' => '上传文件为空',
  '1005' => '服务器内部错误',
  '1006' => '服务器内部错误',
  '1007' => '服务器内部错误',
  '1008' => '上传的图片尺寸过大',
  '1009' => '请上传正确格式的图片',
];
$path = 'D:/phpStudy/WWW/phpstudy/upload';
$maxSize = 1024*1024*3;
$mine = ['image/jpeg','image/jpg','image/pjped','image/png','image/gif'];
$file = $_FILES['myfile'];
echo $errorInfo[upload_file($path,$maxSize,$mine,$file)];

