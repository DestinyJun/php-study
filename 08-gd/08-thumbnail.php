<?php
/**
 * 缩略图实现
 */
// 创建缩略图画布
$thumbnail_w = 400;
$thumbnail_h = 200;
$thumbnail_img = imagecreatetruecolor($thumbnail_w,$thumbnail_h);
// 读取用户图片
$src_file = '../lib/images/xiuzhi.jpg';
$src_info = getimagesize($src_file);
$src_w = $src_info[0];
$src_h = $src_info[1];
$src_img =createImg($src_file);
// 计算所要采取图片的宽高
$f_h = $thumbnail_h;
$f_w = $src_w / $src_h * $f_h;
if ($f_w>$thumbnail_w) {
  $f_w = $thumbnail_w;
  $src_h = $f_w / $f_h *$src_w;
}
// 把取样图调整到缩图图画布的中央，计算起点坐标
$pos_x = ($thumbnail_w - $f_w) / 2;
$pos_y = ($thumbnail_h - $f_h) / 2;
/**
 * 调用缩略图函数，合并采集的图片跟创建的画布
 * imagecopyresampled函数参数说明：
 * dest: 缩略图画布  src：取样图片资源，
 * d_x,d_y ：取样图片放在缩略图上的起点
 * s_x,s_y：截取采样图片的起点
 * dst_w,dst_h：取样图放在缩略图上的宽高
 * src_w,src_h：取样图截起的大小
 */
imagecopyresampled($thumbnail_img,$src_img,$pos_x,$pos_y,0,0,$f_w,$f_h,$src_w,$src_h);
// 显示图片
header('content-type:image/jpeg');
imagejpeg($thumbnail_img);
// 读取图片作为画布
function createImg($file) {
  $info = getimagesize($file);
  switch ( $info['mime']) {
    case 'image/jpeg':
      $img = imagecreatefromjpeg($file);
      break;
    case 'image/png':
      $img = imagecreatefrompng($file);
      break;
    case 'image/gif':
      $img = imagecreatefromgif($file);
      break;
  }
  return $img;
}
