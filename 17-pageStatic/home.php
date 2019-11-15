<?php
$connect = mysqli_connect('127.0.0.1','root','root','blog');
if (!$connect) {
  exit('连接数据库失败');
}
$sql = 'select * from blog.user';
$res = mysqli_query($connect,$sql);
if (!$res) {
  exit('查询数据失败');
}
?>
<!doctype html>
<html lang="zh">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>页面静态化案例</title>
</head>
<body>
<h3 style="text-align: center">用户列表</h3>
<table>
  <thead>
  <tr>
    <th>id</th>
    <th>用户名</th>
    <th>查看</th>
  </tr>
  </thead>
  <tbody>
  <?php while ($row=mysqli_fetch_assoc($res)) { ?>
    <tr>
      <td><?php echo $row['id']?></td>
      <td><?php echo $row['username']?></td>
      <td><a href="<?php echo $row['id'].'.html'?>">查看</a></td>
    </tr>
  <?php } ?>
  </tbody>
</table>
</body>
</html>
