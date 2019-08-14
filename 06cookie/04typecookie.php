<?php
// cookie的值类型
// 由于cookie的值最终是保存在客户端的文本文件中的，由于文本文件只能存储字符，因此cookie是不能保存数组的
// 如果想要保存数组，可按照复选框的方法,这是一种变通的方式
// cookie保存数组
$arr = ['name'=> 'wenjun','age' => '18'];
setcookie('arr[name]',$arr['name']);
setcookie('arr[age]',$arr['age']);
