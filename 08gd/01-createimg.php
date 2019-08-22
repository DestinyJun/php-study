<?php
/**
 * 基本绘制操作
 */
$w = 400;
$h = 200;
// 创建画布
$img = imagecreatetruecolor($w,$h);
// 分配颜色，只是创建了颜色，但是没有使用
$bg = imagecolorallocate($img,128,255,187);
// 为画布填充颜色
imagefill($img,0,0,$bg);
// 显示画布
header('content-type:image/jpeg'); // 告诉浏览器以图片格式来显示
imagejpeg($img);

