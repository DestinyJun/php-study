<?php
/**
 * 使用session放翻墙
 * 第一步：登陆成功设置session
 * 第二部：访问所有的php脚本文件时，必须先验证session
 */
session_start();
if (isset($_REQUEST['username'])) {
  $username = $_REQUEST['username'];
  $password = md5($_REQUEST['password']);
  $code = $_REQUEST['code'];
  if (strtolower($code) != strtolower($_SESSION['code'])) {
    header('location:newsLogin.php');
    exit;
  }
  // 连接数据
  $connect = mysqli_connect('127.0.0.1', 'root', 'root', 'news');
  if (!$connect) {
    exit('连接数据库失败');
  }
  // 查询数据 遍历查询出来的数据 (普通验证）
  /*$select_sql = "select username,password from user";
  $query = mysqli_query($connect,$select_sql);
  echo '<pre>';
  while($result = mysqli_fetch_assoc($query)) {
    $arr[] = $result;
  }
  if (count($arr) !== 0) {
    for ($i=0;$i<count($arr);$i++) {
      if ($arr[$i]['username'] === $_REQUEST['username']) {
        exit('登陆成功');
      }
    }
    exit('登陆失败');
  }*/
  // 组织sql验证 （高级验证）
  $select_sql = "select * from user where `username` = '$username' && `password` = '$password' limit 1";
  $query = mysqli_query($connect,$select_sql);
  $result = mysqli_fetch_assoc($query);
  if (!$result) {
    header('location:newsLogin.php');
  } else {
    $_SESSION['userInfo'] = $result;
    header('location:newsList.php');
    // $returnMsg = ['status' => 1001, 'msg' => '用户名或密码错误'];
    // echo $returnMsg;
  }
}
