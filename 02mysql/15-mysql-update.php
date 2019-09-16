<?php
/*第一步：以数据库建立连接，连接数据库服务上的指定数据库,看是否搭桥成功*/
// 如果需要忽略错误警告，可以在调用的函数前面加上@
// 建立与数据库之间的连接
$connection = mysqli_connect('127.0.0.1', 'root', 'root', 'demo');
//var_dump($connection);

// 建立成功，返回一个对象，失败则返回false,
if (!$connection ) {
    exit ('<h1>数据库连接失败</h1>');
}

// 查询出来得值如果是中文得情况下，很容易出现乱码，因此需要设置下数据库得查询编码,这里会出现设置得顺序问题
// 有些必须是在查询之前设置，有些是在建立连接之前设置
// 传入得参数是连接对象跟编码
mysqli_set_charset($connection, 'utf8');

// 基于创建的连接对象执行一次查询操作,这里不会直接返回结果集，而是告诉你一个信号，你的一行一行去取
// 得到一个查询对象，这个查询的对象可以用来再到数据一行一行拿数据
$query = mysqli_query($connection, 'update users set name = \'孙尚香\' where id = 14');
// 插入出现乱码？？？？？？

// 这里要想想查询失败的情况
if(!$query) {
    exit('<h1>查询失败</h1>');
}

// 增删改拿到得是受影响得行数，这里我们先拿到受影响得行，传入得是连接对象
$row = mysqli_affected_rows($connection);
var_dump($row);

// 还需要释放连接的桥梁，否则桥搭得太多，别人就连不上了
mysqli_close($connection);
