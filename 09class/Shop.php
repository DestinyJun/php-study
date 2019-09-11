<?php
/**
 * 设计一个商品类基类
 */

class Shop
{
  private $name;
  private $price;
  protected function __construct($name2,$price2)
  {
    $this->name = $name2;
    $this->price = $price2;
  }
  protected function showInfo ()
  {
    $str = "商品名称：{$this->name}";
    $str .= "<br>商品价格：{$this->price}";
    return $str;
  }
}