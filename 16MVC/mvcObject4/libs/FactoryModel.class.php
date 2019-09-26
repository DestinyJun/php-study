<?php
require_once('./libs/NewsModel.class.php');
require_once('./libs/UserModel.class.php');
/**
 * 这是一个工厂类
 */
final class FactoryModel
{
  // 私有的保存对象的静态属性
  private static $arrModelObj = array();
  // 共有的创建对象的方法
  public static function getStance($modelClassName) {
    if (!isset(self::$arrModelObj[$modelClassName])) {
      self::$arrModelObj[$modelClassName] = new $modelClassName();
    }
    return self::$arrModelObj[$modelClassName];
  }
}
