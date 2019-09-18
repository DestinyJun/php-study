<?php
/**
 * 对象反序列化：
 * （1）对象反序列化的过程，与其他数据一样
 * （2）若反序列化的变量是一个对象，则在成功的构建对象之后，PHP会自动去试图调用
 * 魔术方法__wakeup()成员函数（如果有的话）
 * （3）经常用在反序列化操作中，例如重新建立数据库连接，或执行其它初始化操作。
 * （1）
 */
$str = file_get_contents('D:\MyPhpstorm\phpstudy\13overload\objtest.txt');
// 对象反序列化
$teacher = unserialize($str);
echo '<pre>';
var_dump($teacher);
