<?php
// 开启OB缓存
ob_start();
echo 'mysql<br/>';
echo 'php<br/>';
echo 'c/c++<br/>';
ob_clean();
echo 'c/c++<br/>';
$str = ob_get_contents();
file_put_contents('D:\MyPhpstorm\phpstudy\17-pageStatic\demo-2.html',$str);
