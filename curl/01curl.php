<?php
/**
 * Created by PhpStorm.
 * User: 42977
 * Date: 2019/8/7
 * Time: 14:17
 * curl函数得使用
 */
// 第一步，初始化curl函数 （也是打开一个浏览器得意思）
$curlHandle = curl_init();

// 第二步，发起请求 模拟get请求，只需要在url中携带参数即可
// 参数说明：CURLOPT_URL 设置请求地址
// 参数说明：CURLOPT_RETURNTRANSFER 取值如果为1.表示不将请求到的数据直接返回给浏览器，而是作为curl_exec()函数的返回值
curl_setopt($curlHandle, CURLOPT_URL, 'www.baidu.com');
curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
// 模拟post请求时，需要添加参数
curl_setopt($curlHandle,CURLOPT_PORT, 1);
// 定义post请求的参数
$dada = ['username' => 'wenjun','password' => '123456'];
// 第三步，执行curl语句
$curlReturn = curl_exec($curlHandle);
// 第四步，把数据写入到文本文件中
file_put_contents('D:/MyPhpstorm/phpstudy/http/test.html', $curlReturn); // file_put_contents写入文件，如果文件存在则清空，不存在则创建


