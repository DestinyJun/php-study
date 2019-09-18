<?php
/**
 * 变量反序列化（把序列化的变量取出来）
 */
$str = file_get_contents('D:\MyPhpstorm\phpstudy\13overload\test.txt');
$arr = unserialize($str);
echo '<pre>';
print_r($arr);
