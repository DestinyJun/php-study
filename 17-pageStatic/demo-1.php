<?php
// 开启OB缓存
ob_start();
echo '100<br/>';
// 设置响应头信息
//开启OB缓存后，header的内容不会再OB缓存中缓存，而是直接到程序缓存中,echo的内容确实优先进入OB缓存
header('content-type:text/html;charset=utf-8'); //
echo '200';
