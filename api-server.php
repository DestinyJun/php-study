<?php
  /**
   * Created by PhpStorm.
   * User: 42977
   * Date: 2019/7/9
   * Time: 10:52
   */
  require_once '14-mysql-insert.php';
  $arr = [];
  $status = false;
  $ips=$_SERVER["REMOTE_ADDR"];
  // 查询数据库
  $query_select = mysqli_query($connection, 'select * from ip_address;');
  if (!$query_select) {
    exit('<h1>查询失败</h1>');
  }
  // 遍历查询出的数据
  while ($row = mysqli_fetch_assoc($query_select)) {
    $arr_a = ['ip' => $row['ip'], 'math' => $row['math']];
    array_push($arr,$arr_a);
  }
  // 判断并插入数据库
  for ($i = 0; $i < count($arr); $i++) {
    echo $arr[$i]['ip'];
    if ($ips === $arr[$i]['ip']) {
      $status = true;
    };
  }
  if (!$status) {
    $query_insert = mysqli_query($connection, "insert into ip_address values ('$ips', 0)");
    if(!$query_insert) {
      exit('<h1>插入失败</h1>');
    }
  } else {
    echo '<h1>你已经访问过了，傻叉<h1/>';
    return;
  }
  //  print_r($arr);
  mysqli_close($connection);