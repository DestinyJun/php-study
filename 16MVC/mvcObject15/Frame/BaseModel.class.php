<?php
/**
 * 基础的数据模型类，不需要实例化，因此可以写为抽象类
 * 基础类都是抽象类
 */
abstract class BaseModel
{
  protected $db = null;
  public function __construct()
  {
    $this->db = Db::getInstance();
  }
}
