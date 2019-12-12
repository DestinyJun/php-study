<?php
/**
 * php操作Redis
 */
$redis = new Redis();
$redis->connect('127.0.0.1',6379);
var_dump($redis->set('name','好'));
echo '<hr>';
var_dump($redis->get('name'));

