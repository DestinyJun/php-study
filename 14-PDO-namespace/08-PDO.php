<?php
/*
  PDO编程案例
 */
// 数据库的配置信息
$dsn = "mysql:host=localhost;port=3306;dbname=news;charset=utf8";
$username = "root";
$password = "root";
// 创建PDO对象
$pdo = new PDO($dsn,$username,$password);

/**
  setAttribute：
  （1）设置数据库句柄属性。达到扩展的作用，比如设置查询语句返回的数据是索引模式还是关联模式
  （2）语法：PDO::setAttribute ( int $attribute , mixed $value ) : bool
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
