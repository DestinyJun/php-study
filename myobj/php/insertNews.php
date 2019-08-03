<?php
/**
 * Created by PhpStorm.
 * User: 42977
 * Date: 2019/8/3
 * Time: 13:43
 * 处理新闻提交请求并插入新闻到数据库
 */
// 设置数据的响应头
header('content-type:text/html;charset=utf-8');
// 接收客户端提交的值 并判断受否验证合格
echo '<pre>';
var_dump($_REQUEST);
$news_title = $_REQUEST['news_title'];
$news_id = $_REQUEST['news_id'];
$news_sort = $_REQUEST['news_sort'];
$news_desc = $_REQUEST['news_desc'];
$news_content = $_REQUEST['news_content'];
// 第一步，连接数据库 （每一步最好都坐下验证判断）
$connect = mysqli_connect('127.0.0.1','root','root');
// 判断是否链接成功
if (!$connect) {
    exit('<h1>链接数据库失败</h1>');
}
// 第二不 设置客户端访问数据库的字符集 两种方法 一种是使用sql语句 一种是使用php函数
// ①使用php
//mysqli_set_charset($connect,'utf8');
// ②使用sql语句
$sql_set_charset = 'set names utf8';
$set_charset_query = mysqli_query($connect,$sql_set_charset);
// 第三步，选择需要使用的数据库
$sql_use_database = 'use news';
$use_database_query = mysqli_query($connect,$sql_use_database);
// 第四步 根据组织sql语句操作表
$sql_insert = "insert into news_list values(default,'$news_title','$news_id','$news_sort','$news_desc','$news_content','2019-08-03 15:38',default)";
$insert_query = mysqli_query($connect,$sql_insert);
var_dump($insert_query);
if ($insert_query) {
    echo '插入成功';
    header("location: newsList.php");
} else {
    echo '插入失败';
}
