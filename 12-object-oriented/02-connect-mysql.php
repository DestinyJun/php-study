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
// 创建数据库的对象链接数据库
$arr = array(
  'db_host' => 'localhost',
  'db_user' => 'root',
  'db_pass' => 'root',
  'db_name' => 'news',
  'charset' => 'utf8',
);
$db = Db::getInstance($arr);
// 接受分页数据
$curPage = isset($_REQUEST['curPage'])?$_REQUEST['curPage']:1;
// 每页显示几条
$curPerPage = 5;
// 分页器起始行
$sqk_curPage = ($curPage - 1) * $curPerPage;
// 构建分页查询SQL语句
$sql = "select * from news_list order by news_sort desc limit $sqk_curPage,$curPerPage";
// 获取新闻条数
$counts = $db->rowCount("select * from news_list");
// 计算总页数
$totalPage = ceil((int)$counts / $curPerPage);
// 查询数据
$arrs = $db->fetchAll($sql);
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>显示新闻信息</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<h4>
  <span> 共有<?php echo $counts ?>条新闻</span>
  <a href="./05-add-mysql.php" class="btn btn-primary">添加新闻</a>
</h4>
<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <table class="table table-hover">
        <thead>
        <tr>
          <th style="width:5%;overflow: hidden">id</th>
          <th style="width:30%;overflow: hidden">新闻标题</th>
          <th style="width:40%;overflow: hidden">新闻描述</th>
          <th style="width:10%;overflow: hidden">更新时间</th>
          <th style="width:15%;overflow: hidden">操作</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($arrs as $item) { ?>
          <tr>
            <td><?php echo $item['id'] ?></td>
            <td><?php echo $item['news_title'] ?></td>
            <td><?php echo $item['news_desc'] ?></td>
            <td><?php echo $item['idt'] ?></td>
            <td>
              <a class="btn btn-danger" href="javascript:void(0)">修改</a>
              <a class="btn btn-info" href="javascript:void(0)" onclick="confirms(<?php echo $item['id'] ?>)">删除</a>
            </td>
          </tr>
        <?php } ?>
        </tbody>
      </table>
    </div>
    <div class="col-12">
      <nav aria-label="Page navigation example">
        <ul class="pagination">
          <?php
            // 创建分页类
            $pageObj = new Page($curPage,$totalPage,$curPerPage);
            $pageObj->fenye();
          ?>
        </ul>
      </nav>
    </div>
  </div>
</div>
<script>
  function confirms(id) {
    console.log(id);
    if (window.confirm('你确定要删除吗')) {
      location.href = "./04-delete-mysql.php?id="+id;
    }
  }
</script>
</body>
</html>
