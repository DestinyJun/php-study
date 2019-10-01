<?php
namespace Frame\Libs {
  // 抽象的基础模型类
  use \Frame\Vendor\PDOWrapper;
  abstract class BaseModel
  {
    // 在里面出创建一个工厂类来专门创建对象，避免新建一个工厂类浪费内存
    private static $arrModelObj = array();
    protected $pdoPro = null;
    public function __construct()
    {
      $this->pdoPro = new PDOWrapper();
    }
    public static function getInstance() {
      // 获取静态化调用的类名
      $classname = get_called_class();
      if (!isset($arrModelObj[$classname])) {
        self::$arrModelObj[$classname] = new $classname();
      }
      return self::$arrModelObj[$classname];
    }
 }
}

