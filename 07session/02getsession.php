<?php
/**
 *读出session
 */
// 开启session
session_start();
echo '<pre>';
print_r($_SESSION);
// 获取当前session的id值
echo session_id();
// session数据，可以存储任何类型的数据，但是$_SESSION预定义数组的下标必须为字符串
