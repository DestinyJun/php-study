<?php
/**
 * * Created by PhpStorm.
 * User: 42977
 * Date: 2019/8/1
 * Time: 17:00
 * $path --上传图片的路径
 * $maxSize --图片上传大小限制
 * $mine -- 图片上传类型限制
 * $file --上传的文件信息
 */
// 图片上传函数
function upload_file($path,$maxSize,$mine,$file){
  // 得到上传的临时文件
  $tmp = $file['tmp_name'];
  // 判断文件上传错误中的信息
  switch ($file['error']) {
    case 1:
      return '1001';
      break;
    case 2:
      return '1002';
      break;
    case 3:
      return '1003';
      break;
    case 4:
      return '1004';
      break;
    case 6:
      return '1005';
      break;
    case 7:
      return '1006';
      break;
  }
  // 限制图片上传的最大尺寸
  if ($file['size'] > $maxSize) {
    return '1008';
  }
  // 限制图片上传类型
  if (!in_array($file['type'], $mine)) {
    return '1009';
  }
  // 得到文件扩展名
  $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
  // 生成随机文件名
  $name = getRandName(6);
  $dist = "$path/$name.$ext";
  // 将上传到临时文件夹中的文件移动到指定文件夹
  move_uploaded_file($tmp, $dist);
  return '1000';
}



