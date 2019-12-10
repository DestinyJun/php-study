<?php
/**
 * PHP操作mongodb
 */
// 连接mongodb,初始化Mongo对象
try {
//  $mongo = new MongoClient('mongodb://192.168.28.95:27017');
  // 增加权限的方式登陆:
  // $mongo = new MongoClient('mongodb://用户名:密码@192.168.28.95:27017/数据库');
  $mongo = new MongoClient('mongodb://root:root@192.168.28.95:27017/admin');
} catch (MongoConnectionException $e) {
  var_dump($e);
}
// 选择数据库
$database = $mongo->wx_test;

// 选择数据库中的数据集
$user = $database->user;

// 向数据集中插入数据
$data = array(
  'name'=>'小三',
  'age'=>20,
  'sex'=>'女'
);
try {
  $res = $user->insert($data);
} catch (MongoCursorTimeoutException $e) {
} catch (MongoCursorException $e) {
} catch (MongoException $e) {
}
var_dump($res);
