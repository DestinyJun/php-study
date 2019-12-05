<?php
// 实例化Memcache数据库
$memcache_obj = new Memcache();

// 连接数据库
$memcache_obj->connect('127.0.0.1','11211');

/**计数器操作，需要设置初始值，memcache计数时不能计负数，最小只能是0，但是redis是可以计负数的**/
// 初始化
$memcache_obj->set('num',0,0,0);
// +5操作
$memcache_obj->increment('num',5);
var_dump($memcache_obj->get('num'));
// -2操作
$memcache_obj->decrement('num',2);
var_dump($memcache_obj->get('num'));

// 删除清空操作
//$memcache_obj->delete('num');
$memcache_obj->flush();
var_dump($memcache_obj->get('num'));



