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
while ($row = mysqli_fetch_assoc($res)) {
  ob_start();
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
      <th>密码</th>
      <th>昵称</th>
      <th>电话</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $row['id']?></td>
      <td><?php echo $row['username']?></td>
      <td><?php echo $row['password']?></td>
      <td><?php echo $row['nikename']?></td>
      <td><?php echo $row['tel']?></td>
    </tr>
  </tbody>
</table>
</body>
</html>
<?php
  // 获取OB缓存中的内容，html文本会直接被放入到OB缓存中而无需echo
  $str = ob_get_contents();
  // 关闭并清空缓存内容，如果不清空，
  //那么PHP脚本执行完毕后，会把内容刷新程序缓存中，那么页面就会看到内容了
  ob_end_clean();
  // 将信息写入到文件中
  // 具体的文件名及文件目录，需要自己定制规则
  // 实际项目中关于html文件的存储，一般都会使用年月日的格式
  file_put_contents('D:\MyPhpstorm\phpstudy\17-pageStatic'.'\\'.$row['id'].'.html',$str);
} ?>
