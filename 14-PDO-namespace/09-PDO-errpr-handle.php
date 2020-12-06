<?php
/*
 * PDO的错误处理(PDO::ATTR_ERRMODE):
 * （1）PDO的错误报告模式有三种：静默模式、警告模式、异常模式
 *    A：当然，我还是可以拿到错误信息的。通过 PDO::errorCode() 和 PDO::errorInfo() 拿到
 *    B：PDO::errorCode()：获取错误状态码，如果为00000,说明没错误
 *    C：PDO::errorInfo()：获取错误的描述性信息
 * （2）静默模式（PDO::ERRMODE_SILENT）：当PDO执行SQL语句有错时，不显示任何错误（默认模式）
 * （3）警告模式（PDO::ERRMODE_WARNING）：当PDO执行SQL语句有错时，用PHP错误等级来报告信息（错误敏感信息直接包露出来，不推荐）
 * （4）异常模式（PDO::ERRMODE_EXCEPTION）：当PDO执行SQL语句有错时，先抛出异常，再捕获异常（日志）
 */
// 数据库配置信息
$dsn = "mysql:host=localhost;port=3306;dbname=news;charset=utf8";
$username = 'root';
$password = 'root';
// new 一个PDO对象
$pdo = new PDO($dsn,$username,$password);
// 设置错误报告模式
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

// 输出错误(静默模式)信息
//echo "错误状态码".$pdo->errorCode();
//print_r($pdo->errorInfo());

// 输出错误(警告模式)信息
//echo "错误状态码".$pdo->errorCode();
//print_r($pdo->errorInfo());

// 输出错误(异常模式)信息（使用抛出异常、捕获异常的语法结构）
try {
  // 试图正常运行的程序代码
  // 如果运行的代码有问题，先抛出异常
  // 如果运行的代码有问题，直接跳到catch代码块处理
  // 查询一条数据
  $sql = "SELECT * FROM news_list WHERE id = ABC";
  $result = $pdo->query($sql);
}catch (PDOException $errorObj) {
  // 如果try代码块没问题，catch模块就不会运行
  // PDOException是PHP的内置异常类
  // $errorObj是由PDOException类产生的异常对象，这里不用new,空格就可以new出一个对象
  // 调用异常类对象的相关方法，输出相关错误信息
  file_put_contents('D:\MyPhpstorm\phpstudy\14PDO\error.txt',($errorObj->getMessage()),FILE_APPEND);
}
