<?php
/**
 * Created by PhpStorm.
 * User: 42977
 * Date: 2018/11/1
 * Time: 15:04
 */
header('content-type:text/html;charset=utf-8');
echo time();
echo date('Y-m-d-H:i:s', time());
$str = '2017-10-22 15:18:58';
$timestamp = strtotime($str);
echo date('Y年m月d日<b\r>H:i:s', $timestamp);

