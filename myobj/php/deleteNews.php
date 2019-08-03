<?php
/**
 * Created by PhpStorm.
 * User: 42977
 * Date: 2019/8/3
 * Time: 23:31
 */
$id = $_REQUEST['id'];
$connect = mysqli_connect('127.0.0.1','root','root');
if (!$connect){
    exit('链接数据库失败');
}
$sql_set_charset = 'set names utf8';
$set_charset_query = mysqli_query($connect,$sql_set_charset);
$sql_use_database = 'use news';
$use_database_query = mysqli_query($connect,$sql_use_database);
$sql_delete = "delete from news_list where id = '$id';";
$delete_query = mysqli_query($connect,$sql_delete);
if ($delete_query) {
    echo '删除成功';
    header("location: newsList.php");
} else {
    echo '删除失败';
}
