<?php
/**
 * 销毁session
 */
// 也要开启session机制
session_start();
// 删除session中的全部内容
session_destroy();
// 指定删除session文件中的部分数据,因为其本质就是一个数组，指定数组下标删除即可
//unset($_SESSION['balance']);

