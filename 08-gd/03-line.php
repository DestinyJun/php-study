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
 * 给画布画一条直线
 * ①创建线颜色
 * ②创建线
 * 参数说明：x1,y1指向起点坐标；x2,y2直线终点坐标
 */
$lineColor = imagecolorallocate($img,255,71,41);
imageline($img,20,20,150,150,$lineColor);
// 显示画布
imagejpeg($img);
