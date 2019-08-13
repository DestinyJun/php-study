<?php
/**
 *删除cookie
 * 只要将其过期日期设置为当晚有效期之间的日期即可删除
 */
// 设置cookie的有效期是一小时
//setcookie('name', 'wenjun', time()+3600);
// 方法一 设置其过期时间为当前时间之前即可删除cookie
//setcookie('name', 'wenjun', time()-1);
// 方法二 直接设置cookie的值为空即可直接删除cookie
setcookie('name', '');
