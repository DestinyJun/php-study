<?php
  /**
   * Created by PhpStorm.
   * User: 42977
   * Date: 2019/7/4
   * Time: 16:06
   */
  // 插入排序
  $arr = [32,28,45,12,63,8];
  for($j=1;$j<count($arr);$j++) {
    $target = $arr[$j];
    for ($i=$j-1;$i>=0;$i--){
      if ($arr[$i]>$arr[$i+1]) {
        $arr[$i+1]= $arr[$i];
        $arr[$i]=$target;
      }
    }
  }
  echo '<pre>';
  print_r($arr);