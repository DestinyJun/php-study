<?php
// 实例化Memcache数据库
$memcache_obj = new Memcache();

// 连接数据库
$memcache_obj->connect('127.0.0.1','11211');

// 获取数据
var_dump($memcache_obj->get('name')) ;
var_dump($memcache_obj->get('age')) ;
var_dump($memcache_obj->get('sex')) ;
