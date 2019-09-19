<?php
spl_autoload_register(function ($className) {
  $str_path = "./".str_replace("\\",'/',$className);
  $arr = [$str_path.".class.php"];
  foreach ($arr as $fileName) {
    if (file_exists($fileName)) require_once ($fileName);
  }
});
// 创建数据库的对象链接数据库
$arr = array(
  'db_host' => 'localhost',
  'db_user' => 'root',
  'db_pass' => 'root',
  'db_name' => 'news',
  'charset' => 'utf8',
);
$db  = \Libs\Db::getInstance($arr);
var_dump($db);
