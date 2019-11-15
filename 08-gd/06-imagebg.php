<?php
/**
 * 把图片作为画布
 * 图片类型可选png，jpg，gif等
 * 以图片的宽高大小作为画布大小
 * 什么样的图片就要用相应的函数来进行
 */
$img = imagecreatefromjpeg('../lib/images/xiuzhi.jpg');
/**
 * 画一条线
 * （1）创建线条颜色
 * （2）
 */
$bdColor = imagecolorallocate($img,255,71,41);
imagerectangle($img,20,20,150,150,$bdColor);
// 显示画布
header('content-type: image/jpeg');
imagejpeg($img);
