<?php
/**
 * PHP操作mongodb
 */
// 连接mongodb,初始化Mongo对象
$mongo = new MongoClient('mongodb://root:root@192.168.28.95:27017/admin');
// 选择数据库
$database = $mongo->wx_test;

// 选择数据库中的数据集
$user = $database->user;

// 查询数据一条
$res = $user->findOne(array('name'=>'文君'),array('sex'=>0,'_id'=>0));
echo '<pre>';
//var_dump($res);
echo "<hr><br>";

// 查询多条数据时注意：查到的是一个数组对象的资源，需要遍历才能拿到
$res2 = $user->find(array(),array('_id'=>0));
foreach ($res2 as $key=>$value) {
  $data[] = $value;
}
echo '<pre>';
var_dump($data);
