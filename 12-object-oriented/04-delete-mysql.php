<?php
// 单例案例链接数据库：
spl_autoload_register(function ($className) {
  // 定义所需要的类文件的路径数组
  $arr = [
    "./$className.class.php",
  ];
  // 循环判断类文件路径是否存在，存在就加载
  foreach ($arr as $filename) {
    if (file_exists($filename)) require_once($filename);
  }
});
// 创建数据库配置数组
$arr = array(
  'db_host' => 'localhost',
  'db_user' => 'root',
  'db_pass' => 'root',
  'db_name' => 'news',
  'charset' => 'utf8',
);
$db = Db::getInstance($arr);
$id= $_REQUEST['id'];
if (isset($id)){
  $sql = "DELETE FROM news_list WHERE id = $id";
  if( $db->exec($sql)) {
    echo '删除成功';
    header("refresh:3;url=./02-connect-mysql.php");
    die();
  } else {
    echo '删除失败';
  }
}
