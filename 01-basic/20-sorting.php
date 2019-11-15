<?php
  /**
   * Created by PhpStorm.
   * User: 42977
   * Date: 2019/7/4
   * Time: 11:30
   */
  // 冒泡排序
  $arr = [32,28,45,12,63];
  echo count($arr);
  for($j=0;$j<count($arr)-1;$j++){
    for ($i=0;$i<count($arr)-1;$i++){
      echo $i;
      if ($arr[$i] > $arr[$i+1]) {
        $temp = $arr[$i];
        $arr[$i] = $arr[$i+1];
        $arr[$i+1] = $temp;
      }
    }
  }
  echo '<pre>';
  print_r($arr);