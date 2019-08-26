<?php
/*
 * 生成验证码
 *
 */
getCode();
function getCode() {
  $charsetStr = 'abcdefghijklmnopqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ23456789';
  $code = '';
  for ($i=0;$i<4;$i++) {
    $code .= $charsetStr[mt_rand(0,56)];
  }
  // 创建画布并填充画布
  $img = imagecreatetruecolor(100,30);
  $bgColor = imagecolorallocate($img,mt_rand(210,255),mt_rand(210,255),mt_rand(210,255));
  imagefill($img,0,0, $bgColor);
 // 绘制随机验证码
  for ($i=0;$i<4;$i++) {
    $charColor = imagecolorallocate($img,mt_rand(100,200),mt_rand(100,200),mt_rand(100,200));
    imagettftext($img,mt_rand(15,28),mt_rand(-20,20),18*($i+1),25,$charColor,'../lib/fonts/simhei.ttf',$code[$i]);
  }
  // 增加干扰项
  for ($i=0;$i<10;$i++) {
    $lineColor = imagecolorallocate($img,mt_rand(180,230),mt_rand(180,230),mt_rand(180,230));
    imageline($img,mt_rand(0,100),mt_rand(0,30),mt_rand(0,100),mt_rand(0,30),$lineColor);
  }
  // 显示画布
  header('content-type:image/jpeg');
  imagejpeg($img);
  return $code;
}
