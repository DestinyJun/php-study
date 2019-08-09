<?php
/**
 * Created by PhpStorm.
 * User: 42977
 * Date: 2019/8/8
 * Time: 21:39
 */
// 给客户端发送cookie标识牌，及会员卡
// 说明：因为cookie也是http协议的内容，所有可以用操作请求头的方式来操作它
// 但是：php也提供了一个直接设置cookie的函数
//header('set-cookie: id=2');
/**
 * setcookie参数说明，其本质就是服务端写入到客户端保存的文本文件
 * name  cookie的名称
 * value cookie的值
 * expire 设置cookie的过期时间，时间是以秒记录的，有效期的起点是时间节点，
 * 如果不设置，默认浏览器本次会话后结束（也即是关闭浏览器就消失）
 */
//setcookie('name', 'wanger');
// 设置有效期30s
setcookie('name', 'wenjun', time()+30);
