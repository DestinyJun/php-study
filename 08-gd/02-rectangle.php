<?php
$width = 500;
$height = 200;
// 创建画布
$img = imagecreatetruecolor($width,$height);
// 为画布创建背景颜色
$bgColor = imagecolorallocate($img,128,255,187);
// 为画布填充背景颜色
imagefill($img,0,0, $bgColor);
// 告诉浏览器以图片格式来显示画布
header('content-type:image/jpeg');
/**
 * 给画布画一个矩形
 * ①创建矩形边框线颜色
 * ②创建矩形
 */
 $bdColor = imagecolorallocate($img,255,71,41);
 imagerectangle($img,20,20,150,150,$bdColor);
// 显示画布
imagejpeg($img);
