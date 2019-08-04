<?php
/**
 * Created by PhpStorm.
 * User: 42977
 * Date: 2019/8/3
 * Time: 18:00
 * 显示新闻列表
 */
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
// 设置客户端访问数据库的编码
$sql_set_charset = 'set names utf8';
$set_charset_query = mysqli_query($connect,$sql_set_charset);
// 选择需要使用的数据库
$sql_use_database = 'use news';
$use_database_query = mysqli_query($connect,$sql_use_database);
// 接收分页数据
$curPage = isset($_REQUEST['curPage'])?$_REQUEST['curPage']:1;
$curPerPage = 5;
$sqk_curPage = ($curPage - 1) * 5;
// 根据组织sql语句操作表 如果是查询则得到MySQL数据资源
$sql_select = "select * from news_list order by news_sort desc limit $sqk_curPage,$curPerPage";
$select = mysqli_query($connect, $sql_select);
// 获取数据库的总记录数
$sql_rows_count = 'select count(*) rows from news_list';
$rows_count_res = mysqli_fetch_assoc(mysqli_query($connect,$sql_rows_count));
// 分页器
$totalPage = ceil((int)$rows_count_res['rows'] / 5);
if ($curPage <= 5) {
    $begin = 1;
    $end = $totalPage>=10?10:$totalPage;
}
else {
    $end = $curPage+5 >$totalPage?$totalPage:$curPage+5;
    $begin = $end - 9<1?1:$end - 9;
}
// 实现上一页
$pageNumString = '';
$prev = $curPage-1<1?1:$curPage-1;
$pageNumString .= "<li class='page-item'>
      <a class='page-link' href='newsList.php?curPage=$prev' aria-label='Previous'>
        <span aria-hidden='true'>&laquo;</span>
      </a>
    </li>";
// 循环得到分页按钮
for ($i=$begin;$i<=$end;$i++) {
    if ($i == $curPage) {
        $pageNumString.="<li class='page-item active'><a class='page-link' href='newsList.php?curPage=$i'>$i</a></li>";
    } else {
        $pageNumString.="<li class='page-item'><a class='page-link' href='newsList.php?curPage=$i'>$i</a></li>";
    }
}
// 实现下一个
$next = $curPage+1>$totalPage?$totalPage:$curPage+1;
$pageNumString .= "<li class='page-item'>
      <a class='page-link' href='newsList.php?curPage=$next' aria-label='Previous'>
        <span aria-hidden='true'>&raquo;</span>
      </a>
    </li>";
// 第五步 解析数据库资源,第六步，循环取出资源，因为不知道需要循环多少次，所以要用while循环
// 把数据库资源解析成索引/枚举数组，就是把数据库的一个下标对应一个值返回出来
//echo '<pre>';
/*while ($result = mysqli_fetch_row($select)) {
    print_r($result);
}*/
// 把数据库资源解析成关联数组，也即是键值对
/*while ($result = mysqli_fetch_assoc($select)) {
    print_r($result);
}*/
include '../resource/html_newsList.php';
