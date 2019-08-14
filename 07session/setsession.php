<?php
// 开启session时，同时激活$_session这个全预定义变量，类型时一个数组
session_start();
/**
 * 操作session 就是往$_session预定义数组中读写数据
 * 脚本结束后session才会再次把$_session保存的数据写回去
 *写入数据
 */
$_SESSION['balance'] = 1000000;
$_SESSION['age'] = 18;
$_SESSION['name'] = 'zhangshan';
// 读出session
echo '<pre>';
print_r($_SESSION);
// 获取当前session的id值
echo session_id();
// session数据，可以存储任何类型的数据，但是$_SESSION预定义数组的下标必须为字符串


