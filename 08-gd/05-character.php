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
header('content-type:image/jpeg'); // 如果出现错误看不见，可以线注释掉此行代码再重试
/**
 * 给画布画一个字母
 * ①创建字母颜色
 * ②创建字母
 */
$charColor = imagecolorallocate($img,255,71,41);
imagettftext($img,30,30,100,150,$charColor,'../lib/fonts/simhei.ttf','文君');
/**
 * 显示画布
 * 可以输出多种格式：imagejpeg($img,filename)，imagepng($img,filename);imagegif($img,filename),
 * 两个参数，如果只填图片资源，则输出到画布，如果两个参数都填，则输出一个图片文件
 * 注意：将画布输出到浏览器时，不能有多余的字符，如空格等
 */
imagejpeg($img);

