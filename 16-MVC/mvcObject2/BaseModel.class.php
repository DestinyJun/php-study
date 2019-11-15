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
    $arr = array(
      'db_host' => 'localhost',
      'db_user' => 'root',
      'db_pass' => 'root',
      'db_name' => 'news',
      'charset' => 'utf8',
    );
    $this->db = Db::getInstance($arr);
  }
}
