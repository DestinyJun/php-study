<?php
namespace Frame\Libs {
  // 抽象的基础模型类
  use \Frame\Vendor\PDOWrapper;
  abstract class BaseModel
  {
    protected $pdoPro = null;
    public function __construct()
    {
      $this->pdoPro = new PDOWrapper();
    }
 }
}

