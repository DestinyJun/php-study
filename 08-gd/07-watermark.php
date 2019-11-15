<?php
/**
 * gb画图片水印水印
 */
$dest_xz = imagecreatefromjpeg('../lib/images/xiuzhi.jpg');
$src_tx =imagecreatefromjpeg('../lib/images/tx1.jpg');

/**
 * 水印函数
 * imagecopymerge()参数说明：
 * dest 目标图片
 * src 水印图片
 * d_x，d_y 目标图片上的某个点
 * s_x,s_y 水印图片上的某个点
 * s_w，s_y 宽高
 * op 水印图片透明度
 */
imagecopymerge($dest_xz,$src_tx,0,0,0,0,50,50,50);

// 显示图片
header('content-type:image/jpeg');
imagejpeg($dest_xz);
