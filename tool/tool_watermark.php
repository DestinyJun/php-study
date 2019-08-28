<?php
/**
 * 封装水印函数
 */
// 图片地址
$dest_file = '../lib/images/xiuzhi.jpg';
$src_file = '../lib/images/tx2.jpg';
// 调用水印函数
createWater($dest_file,$src_file,'center',$op=50);
/** 封装水印函数
 * @param $dest string 目标图片路径
 * @param $src string 水印图片路径
 * $param $pos string 水印图片在目标图片的位置 left-top:左上角......
 * @param $op number 水印函数透明度
 */
function createWater($dest,$src,$pos,$op) {
  // 读取图片到画布
  $dest_img = createImg($dest);
  $src_img = createImg($src);
// 获取目标/水印图片的尺寸
  $dest_img_size = getimagesize($dest);
  $src_img_size = getimagesize($src);
  // 目标图片的位置
  switch ($pos) {
    case 'left_top':
      $d_x = 0;
      $d_y = 0;
      break;
    case 'left_bottom':
      $d_x = 0;
      $d_y = $dest_img_size[1] - $src_img_size[1];
      break;
    case 'right_top':
      $d_x = $dest_img_size[0] - $src_img_size[0];
      $d_y = 0;
      break;
    case 'right_bottom':
      $d_x = $dest_img_size[0] - $src_img_size[0];
      $d_y = $dest_img_size[1] - $src_img_size[1];
      break;
    case 'center':
      $d_x = ($dest_img_size[0] - $src_img_size[0])/ 2;
      $d_y = ($dest_img_size[1] - $src_img_size[1])/ 2;
      break;
  }

// 画水印
  imagecopymerge($dest_img,$src_img,$d_x,$d_y,0,0,$src_img_size[0],$src_img_size[1],$op);
// 显示合成水印后的图片
  header('content-type:image/jpeg');
// 把图片以文件的形式输出
//header('Content-type: application/octet-stream'); // 叫浏览器不要去解析它
//header('Content-Disposition: attachment; filename=秀智.jpg'); // 叫浏览器以附件的形式来处理
  imagejpeg($dest_img);
}
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
