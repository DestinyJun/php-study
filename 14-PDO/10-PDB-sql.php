<?php
/**
 * SQL语句的执行过程：
 * （1）SQL语句的执行，分成两个阶段：编译和执行
 * （2）如果SQL语句是第一次执行，则先编译再执行，编译过程十分复杂，耗用系统资源，相对不太安全
 * （3）如果SQL语句是第二次执行（即相同的SQL语句），直接从缓存中读取，无疑执行效率是最高的
 * 也是比较安全的，可以有效避免SQL注入等安全问题
 *
 * PDO的预处理步骤（SQL语句预处理）：
 * （1）先提取相同结构的SQL部分！（将数据部分、可变的部分去掉）
 * （2）编译这个相同的结构！将编译结果保存
 * （3）再将不同的数据部分进行替换！最后执行
 *
 * PDO制作相同结构的SQL部分（两种方式）：
 * （1）使用占位符":value"来代替真正的数据：insert into users values (:title,:content);
 * （2）使用占位符"?"来代替真正的数据：insert into users values (?,?);
 * （3）使用prepare()函数预编译SQL语句
 * （4）使用PDOStatement::bindValue()方法给占位符绑定数据
 * （5）使用PDOStatement::execute()方法执行绑定数据的SQL语句
 */
// 数据库配置信息
$dsn = "mysql:host=localhost;port=3306;dbname=news;charset=utf8";
$username = 'root';
$password = 'root';
// new 一个PDO对象
$pdo = new PDO($dsn,$username,$password);
// 设置错误报告模式
//$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

// prepare()方法 预编译相同结构的SQL语句，返回结果集对象,使用占位符":value"
$sql = "INSERT INTO user VALUES (DEFAULT,:username,:pwd)";
$PDOStatement = $pdo->prepare($sql);
// 给预编译的占位符绑定真正的数据
$PDOStatement->bindValue(":username","lhy");
$PDOStatement->bindValue(":pwd","123456");

// 使用占位符"":1"
//$sql = "INSERT INTO user(id,username,password) VALUES(default,?,?) ";
//$PDOStatement = $pdo->prepare($sql);
//$PDOStatement->bindValue("1","zga");
//$PDOStatement->bindValue("2","123456");

// 执行绑定数据的SQL预处理语句，PDOStatement::execute — 执行一条预处理语句
$PDOStatement->execute();
