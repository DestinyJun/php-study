<?php
/*
 * PDO编程：
 * （1）PDO就是PHP Date Object的简称
 * （2）PDO主要用来代替数据库操作类
 * （3）PHP同时可以操作多个数据库。例如：MySQL、SQL server、Oracle、Db2等
 * （4）PHP 数据对象 （PDO） 扩展为PHP访问数据库定义了一个轻量级的一致接口，无论使用
 * 什么数据库，都可以通过一致的函数（方法）来执行查询和获取数据
 * （5）PDO 提供了一个数据访问的抽象层，作用是统一各种数据库的接口访问，与MySQL和mssql函数库相比，
 * PDO让跨数据库的使用更具亲和力，与ADODB和 MDB2相比，PDO更高效
 * （6）有了PDO，只需使用PDO中的方法就可以对各种数据库进行操作，在选择不同的数据库时，只修改PDO的DSN即可
 * （7)PDO就是一个系统类
 *
 * PDO链接MySQL：
 * （1）创建一个链接数据库的PDO实例
 * （2）语法：PDO::__construct ( string $dsn [, string $username [, string $password [, array $driver_options ]]] )
 * （3）$dsn：数据源的名称，包含了链接数据库的基本信息。格式："dbtype:host=主机名;port=端口号;dbname=数据库名;charset=字符集"
 *    dbtype是指链接数据库的类型，例如：mysql,mssql,oracle;
 *    host：数据库服务器地址
 *    port：数据库端口号，MySQL的端口号默认3306
 *    dbname：数据库名称
 *    charset：字符集
 * （4）$username：数据库的用户名
 * （5）$password：数据库的的密码
 *
 * PDOStatement类：
 * （1）
 */
// 数据库的配置信息
$dsn = "mysql:host=localhost;port=3306;dbname=news;charset=utf8";
$username = "root";
$password = "root";
// 创建PDO对象
$pdo = new PDO($dsn,$username,$password);

/**
 * setAttribute：
 * （1）设置数据库句柄属性。达到扩展的作用，比如设置查询语句返回的数据是索引模式还是关联模式
 * *2）语法：PDO::setAttribute ( int $attribute , mixed $value ) : bool
 */
// 设置默认的提取数据的模式,总的设置
//$pdo ->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

/**
 * exec()方法 执行非select的SQL语句
 */
//$sql = "DELETE FROM news_list WHERE id = 99";
//echo "共删除".$pdo->exec($sql)."条记录";

/*
 * query()方法：
 * PDO::query — 执行 SQL 语句，以 PDOStatement 对象形式返回结果集，查询对象
 */
$sql = "SELECT * FROM news_list ORDER BY id DESC LIMIT 5";
$pdoStatment = $pdo->query($sql); // 返回的是一个PDOStatement的结果集d对象
echo '<pre>';
//print_r($pdoStatment ->fetch(PDO::FETCH_ASSOC)); // 可以在fetch函数中单独设置结果集的模式
//print_r($pdoStatment ->fetchAll(PDO::FETCH_ASSOC));
//print_r($pdoStatment->fetchColumn(0)); // 取出查出的数据第一条中的某列值，根据数组的下标来取
print_r($pdoStatment->rowCount()); // 从结果集中获取总共记录数


/**
 * lastInsertId()方法：
 * 返回最后插入行的ID值，或者是一个序列对象最后的值。PDO::lastInsertId ([ string $name = NULL ] ) : string
 */
//$sql = "INSERT INTO news_list VALUES (DEFAULT,'刚刚插入',1,100,'就是想插','使劲插','2019-09-19 23:49',DEFAULT)";
//$pdo->exec($sql);
//echo "刚刚插入的数据的ID=".$pdo->lastInsertId();
