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

// 删除整条数据数据
//$res = $user->remove(array('name'=>'文君'));
//var_dump($res);

// 删除数据中的某个字段
$res = $user->remove(array('name'=>'徐晶'),array('$unset'=>array('sex'=>1)));
var_dump($res);

