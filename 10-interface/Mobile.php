<?php
// 产品1,小灵通
interface XiaoLingTong
{
  // 打电话
  public function tel();
}
// 产品2，MP3
interface Mp3 {
  // 听音乐
  public function music();
}
// 产品3，MP3，MP3的升级
interface Mp4 extends Mp3 {
  // 看电影
  public function video();
}
// 产品5，上面产品功能的集成——手机
class Mobile implements XiaoLingTong,Mp4
{

  public function tel()
  {
    // TODO: Implement tel() method.
    echo "打电话<br>";
  }

  public function music()
  {
    // TODO: Implement music() method.
    echo "听音乐<br>";
  }

  public function video()
  {
    // TODO: Implement video() method.
    echo "看电影<br>";
  }
  // 定义玩游戏
  public function play() {
    echo '玩游戏<br>';
  }
}
// 创建手机类对象
$obj = new Mobile();
$obj ->tel();
$obj ->music();
$obj ->video();
$obj ->play();
