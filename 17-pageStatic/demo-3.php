<?php
ob_start();
echo '第一层';
$str1 = ob_get_contents();
file_put_contents('D:\MyPhpstorm\phpstudy\17-pageStatic\demo-1.txt',$str1);
echo ob_get_level();

ob_start();
echo '第二层';
$str2 = ob_get_contents();
file_put_contents('D:\MyPhpstorm\phpstudy\17-pageStatic\demo-2.txt',$str2);
echo ob_get_level();

ob_start();
echo '第三层';
$str3 = ob_get_contents();
file_put_contents('D:\MyPhpstorm\phpstudy\17-pageStatic\demo-3.txt',$str3);
echo ob_get_level();
