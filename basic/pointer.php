<?php
  /**
   * Created by PhpStorm.
   * User: 42977
   * Date: 2019/7/2
   * Time: 9:04
   */
  // foreach
  $arr = ['id'=>10,'name'=>'苹果','price'=>3000];
  foreach ($arr as $key => $value) {
    echo $key,'—>',$value;
  }
  // each
  echo '<pre>';
  $irem = each($arr);
//  print_r($irem) ;
  list($k,$v)=$irem;
  echo $k,'<br/>',$v;
  echo '<br/>';
  list($k,$v)=$irem;
  echo $k,'<br/>',$v;