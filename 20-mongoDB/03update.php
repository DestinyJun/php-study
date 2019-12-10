<?php
/**
 * PHP操作mongodb
 */
// 连接mongodb,初始化Mongo对象
$mongo = new MongoClient('mongodb://192.168.28.95:27017');
// 选择数据库
$database = $mongo->wx_test;

// 选择数据库中的数据集
$user = $database->user;

// 修改数据
$res = $user->update(array('name'=>'徐晶'),array('$set'=>array('sex'=>'女')));
var_dump($res);
