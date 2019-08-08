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
setcookie('name', 'wanger');
