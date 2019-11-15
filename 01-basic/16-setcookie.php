<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/1/18 0018
 * Time: 0:28
 */
// 这个设置cookie不是正式的，正式的在下面，header在设置相同的键时会被覆盖
//header('Set-Cookie: foo=bar;foo1=bar1;');

// 专门设置cookie的函数，且可以设置多个

// setcookie(key, valye. time, path，source， httponly)有多个参数
//time是设置cookie过期时间
// path是设置页面访问cookie的路径权限，也即是作用范围
// source安全配置，只有https才能用
// 其根目录一般是wenjun.top这样的域名形势下的子页面范围都能访问，如www.wenjun.top可以 wenjun.top也可以
// 一旦$httponly为真，客户端的js就无法获取操作cookie了
// 用document.cookie操作cookie时，获取是拿到全部，而设置只能设置一个
//setcookie('key', 'value');
//setcookie('key1', 'value1');

// 如何删除cookie呢？很简单，只需要setcookie的只传name参数即可,删除其实就是设置cookie时间为过期
// 删除key1，cookie的有效时间默认是一次session，也即是一次回话，关闭浏览器就会消失
// 还能传递第三个参数，第三个参数就是设置cookie的过期时间
// 浏览器接受cookie的参数说明：path /表示只要在网站根目录下的页面，都可以访问cookie
// path /users ==>表示只有在users目录下的页面才能访问cookie
setcookie('key1');
//setcookie('key1', 'value1');
