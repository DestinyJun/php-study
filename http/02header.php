<?php
/**
 * Created by PhpStorm.
 * User: 42977
 * Date: 2019/8/7
 * Time: 9:14
 */
/* php响应头的操作 */
// 设置响应格式及响应编码
// content-type设置响应数据格式
// charset-utf8 设置响应数据的编码
// location：url 用于重定向
//header('Content-type:text/html;charset-utf8');

/**
 * php实现文件下载
 * 1：告诉浏览器将要给你返回的数据直接解析，而要作为一个应用程序数据进行下载
 * 2：通过协议头告诉浏览器将要给你的数据作为附件下载，并且指定下载文件的文件名
 * 3：读取所要发送的文件数据
 */
header('Content-type: application/octet-stream'); // 叫浏览器不要去解析它
header('Content-Disposition: attachment; filename=秀智.jpg'); // 叫浏览器以附件的形式来处理
$content = file_get_contents('D:/MyPhpstorm/phpstudy/lib/images/xiuzhi.jpg');
echo $content;
