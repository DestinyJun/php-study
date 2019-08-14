<?php
// 给客户端发送cookie标识牌，及会员卡
// 说明：因为cookie也是http协议的内容，所有可以用操作请求头的方式来操作它
// 但是：php也提供了一个直接设置cookie的函数
//header('set-cookie: id=2');
/**
 * setcookie参数说明，其本质就是服务端写入到客户端保存的文本文件
 * （1）name  cookie的名称
 * （2）value cookie的值
 * （3）expire 设置cookie的过期时间，时间是以秒记录的，有效期的起点是时间节点，
 * 如果不设置，默认浏览器本次会话后结束（也即是关闭浏览器就消失）
 * （4）path 设置cookie的路径，如果没有设置，默认是php文件的路径
 * '/'代表整个网站目录都有效果
 * （5）domain 设置cookie的跨域，cookie的跨域只能是二级域名相同才能跨域，
 * 切记，一个主机是不能既绑定一级域名，又绑定二级域名的，除非是购买的服务器，可以建多站点，配置虚拟服务器实现，
 * 比如www.baidu,com设置二级域名后music.baidu.com，只要给cookie的path设置为.baidu.com后就可以设置cookie的二级域名跨域
 * （6）source 取值为true或者false默认是false，如果是true，那么只要单客户端使用的协议是https时，则会将cookie携带给服务器端
 * （7）httponly 取值为true或者false默认是false,如果设置为true，那么只能由php访问cookie，js就不能访问了
 */
//setcookie('name', 'wanger');
// 设置有效期30s
setcookie('name', 'wenjun', time()+30);
