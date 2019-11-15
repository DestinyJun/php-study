<?php
// 开启session时，同时激活$_session这个全预定义变量，类型时一个数组
session_start();
/**
 * 操作session 就是往$_session预定义数组中读写数据
 * 脚本结束后session才会再次把$_session保存的数据写回去
 *写入session数据
 */
$_SESSION['balance'] = 1000000;
$_SESSION['age'] = 18;
$_SESSION['name'] = 'zhangshan';

/**
 * 禁用cookie时如何使用session
 * 第一步：设置不仅仅使用cookie保存session_id
 * 第二步：设置可以使用transid保存session_id数据
 * 开启后，如果当前php脚本中有a标签，就会自动添加session_id
*/
echo '<a href="./02getsession.php">获取session</a>';



