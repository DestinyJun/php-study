<?php
// 单例案例链接数据库：
spl_autoload_register(function ($className) {
  // 定义所需要的类文件的路径数组
  $arr = [
    "./$className.class.php",
  ];
  // 循环判断类文件路径是否存在，存在就加载
  foreach ($arr as $filename) {
    if (file_exists($filename)) require_once ($filename);
  }
});
// 创建数据库的对象
$arr = array(
  'db_host' => 'localhost',
  'db_user' => 'root',
  'db_pass' => 'root',
  'db_name' => 'news',
  'charset' => 'utf8',
);
$db = Db::getInstance($arr);
// 获取多行数据
$sql = "select * from news_list order by id desc";
$arrs = $db->fetchAll($sql);
// 获取新闻条数
$counts = $db->rowCount($sql);
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>显示新闻信息</title>
</head>
<body>
<h4>共有<?php echo $counts ?>条新闻</h4>
<table>
  <thead>
  <tr>
    <th>新闻标题</th>
    <th>新闻描述</th>
    <th>更新时间</th>
  </tr>
  </thead>
  <tbody>
  <?php foreach ($arrs as $item) {?>
  <tr>
    <td><?php echo $item['news_title'] ?></td>
    <td><?php echo $item['news_desc'] ?></td>
    <td><?php echo $item['idt'] ?></td>
  </tr>
  <?php }?>
  </tbody>
</table>
</body>
</html>
