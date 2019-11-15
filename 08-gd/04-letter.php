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
 * 给画布画一个字母
 * ①创建字母颜色
 * ②创建字母
 * imagestring函数限制：只能绘制字母，字母最大尺寸为5，不能选择字体，不能绘制角度
 */
$letterColor = imagecolorallocate($img,255,71,41);
imagestring($img,5,100,150,'ITCAST',$letterColor);
// 显示画布
imagejpeg($img);
