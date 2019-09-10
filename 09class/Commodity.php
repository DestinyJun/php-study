<?php
/**
 * 商品大类：
 */

class Commodity
{
  // 类常量
  const company = '京东';
  // 静态属性
  protected static $ems = '顺丰速递';
  // 私有成员属性
  private $name;
  private $price;
  private $amount;
  private $number;
  // 构造方法初始化
  public function __construct($arr)
  {
    $this->name = $arr['name'];
    $this->price = $arr['price'];
    $this->amount = $arr['amount'];
    $this->number = $arr['number'];
  }
  // 静态方法
  protected static function readMe() {
    // '.__METHOD__'返回函数本身的名称
    return '我是静态方法'.__METHOD__;
  }
  // 公有自我显示方法
  public function showInfo()
  {
    return "<br>商品名称：{$this->name}<br>商品价格：{$this->price}<br>".__METHOD__;
  }
  // 析构方法对象销毁时执行
  public function __destruct()
  {
    // TODO: Implement __destruct() method.
    echo '我要销毁了';
  }
}
