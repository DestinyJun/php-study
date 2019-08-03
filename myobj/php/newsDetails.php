<?php
/**
 * Created by PhpStorm.
 * User: 42977
 * Date: 2019/8/4
 * Time: 0:55
 */
$id = $_REQUEST['id'];
$connect = mysqli_connect('127.0.0.1','root','root','news');
if (!$connect) {
    exit('链接数据库失败');
}
mysqli_set_charset($connect,'utf8');
$sql_select = "select * from news_list where id = '$id';";
$select_query = mysqli_query($connect,$sql_select);
// 只有一条数据，无需循环便可拿到
$result = mysqli_fetch_assoc($select_query);
include ('../resource/html_newsDetails.php');
