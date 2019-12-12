<?php
/*
 * 从队列的尾部取出数据（其实是删除数据）：购买商品
 * 限购的思路：
 * 第一种：通过用户的唯一标识确认登录之后才可以抢购，在下单之前判断当前用户是否已经买过
 * 第二种：简单通过IP判断是否已经购买（误伤率大）
 */
$redis = new Redis();
$redis->connect('127.0.0.1',6379);
$client_ip = $_SERVER['REMOTE_ADDR'];
// 抢购前获取用户是否在黑名单中
if($redis->sIsMember('ipset',$client_ip) === false) {
  // 说明没有买过，可以购买
  var_dump($redis->rPop('goods'));
  var_dump($redis->lSize('goods'));
  // 买完后把当前客户端加入黑名单
  $redis->sAdd('ipset',$client_ip);
} else {
  echo '您已经买过了，不要贪心！';
}

?>
