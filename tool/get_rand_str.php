<?php
/**
 * Created by PhpStorm.
 */
// 设置默认时区
date_default_timezone_set('PRC');
// 生成随机字符串
function getRandName($num,$times) {
    //$str = uniqid(); // 直接可以生成随机唯一字符串
  if($times) {
    $str = date("YmdHis"); // 获取当前时间的年月日时分秒
  } else {
    $str = '';
  }
    for ($i=0;$i<$num;$i++){
        switch(mt_rand(0,2)){
            case 0:
                $str .= chr(mt_rand(97,122));  // 小写字母
                break;
            case 1:
                $str .= chr(mt_rand(65,90)); // 小写字母
                break;
            case 2:
                $str .= mt_rand(0,9);
                break;
        }
    }
    return $str;
}
