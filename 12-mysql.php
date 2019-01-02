<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/1/3 0003
 * Time: 1:09
 */
// 通过PHP代码执行Sql语句得到查询结果

//phpinfo();
/*第一步：以数据库建立连接，连接数据库服务上的指定数据库,看是否搭桥成功*/

// 如果需要忽略错误警告，可以在调用的函数前面加上@
$connection = mysqli_connect('127.0.0.1', 'root', 'root', 'demo2');
//var_dump($connection);

// 建立成功，返回一个对象，失败则返回false,
if (!$connection ) {
    exit ('<h1>数据库连接失败</h1>');
}
