<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/1/3 0003
 * Time: 1:09
 */
// 通过PHP代码执行Sql语句得到查询结果

//  mysqlSelect('127.0.0.1', 'root', 'root', 'test', 'test_users');

//phpinfo();
/*第一步：以数据库建立连接，连接数据库服务上的指定数据库,看是否搭桥成功*/
// 如果需要忽略错误警告，可以在调用的函数前面加上@
// 建立与数据库之间的连接
$connection = mysqli_connect('127.0.0.1', 'root', 'root', 'test');
//var_dump($connection);

// 查询出来得值如果是中文得情况下，很容易出现乱码，因此需要设置下数据库得查询编码,这里会出现设置得顺序问题
// 有些必须是在查询之前设置，有些是在建立连接之前设置
// 传入得参数是连接对象跟编码
mysqli_set_charset($connection, 'utf8');

// 建立成功，返回一个对象，失败则返回false,
if (!$connection ) {
    exit ('<h1>数据库连接失败</h1>');
}

// 基于创建的连接对象执行一次查询操作,这里不会直接返回结果集，而是告诉你一个信号，你的一行一行去取
// 得到一个查询对象，这个查询的对象可以用来再到数据一行一行拿数据
$query = mysqli_query($connection, 'select * from test_users;');

// 这里要想想查询失败的情况
if(!$query) {
    exit('<h1>查询失败</h1>');
}

// 去取数据,每次取出一行数据
//$row = mysqli_fetch_assoc($query);

// 循环去取数据,遍历结果集
while ($row = mysqli_fetch_assoc($query)) {
    var_dump($row);
}

// 拿到结果以后，你要去释放查询的资源
mysqli_free_result($query);

// 还需要释放连接的桥梁，否则桥搭得太多，别人就连不上了
mysqli_close($connection);
