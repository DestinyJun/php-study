<?php
require_once './Mobile.php';
$mobile1 = new Mobile('meta30','华为','5999','贵阳');
$mobile1->showCount();

// 对象什么时候销毁？当然是php脚本执行完毕后自动销毁，也可以自己手动销毁
