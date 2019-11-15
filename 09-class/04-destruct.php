<?php
/**
 * 类/对象析构方法的使用
 */
require_once './Mobile.php';
$mobile2 = new Mobile('meta30','华为','5999','贵阳');
// 手动销毁的对象，对象也算是一个变量，说要直接用unset
unset($mobile2);
echo '这里时脚本的最后一行代码<br>';
