<?php
/** session入库的实现 */
// （1）设置session的存储方式
ini_set('session.save_handler','memcache');
// （2）设置session的存储地址（memcache默认的连接协议是TCP协议）
ini_set('session.save_path','tcp://127.0.0.1:11211');
// （3）存储session
$_SESSION['name']='文君';
// （4）取出session
echo $_SESSION['name'];
