<?php

/**
 * 定义最终的框架类
 */
final class Frame
{
  public static function run()
  {
    self::initCharset();  // 初始化字符集设置
    self::initConfig();  // 初始化配置信息
    self::initRoute();   // 初始化路由参数
    self::initConst();   // 初始化目录常量设置
    self::initAutoLoad();   // 初始化类的自动加载
    self::initDispatch();   // 初始化请求分发
  }
  private static function initCharset()
  {
    // 初始化字符集
    header('content-type:text/html;charset=utf8');
  }
  private static function initConfig()
  {
    $GLOBALS['config'] = require_once ('./App/Conf/Config.php');
  }
  private static function initRoute()
  {
    // 获取应用的平台、控制器名称、动作参数，也即是路由
    $p  = isset($_GET['p'])?$_GET['p']:$GLOBALS['config']['default_platform'];
    $c  = isset($_GET['c'])?$_GET['c']:$GLOBALS['config']['default_controller'];
    $ac = isset($_GET['action'])?$_GET['action']:$GLOBALS['config']['default_action'];
    define('PATH',$p);                // 平台常量
    define('CONTROLLER',$c);          // 控制器常量
    define('ACTION',$ac);             // 行为常量
  }
  private static function initConst()
  {
    // 常用的目录常量设置
    define('DS',DIRECTORY_SEPARATOR);// 目录分隔符
    define('ROOT_PATH',getcwd());    // 网站根目录
    define('FRAME_PATH',ROOT_PATH.DS."Frame".DS);  // Frame目录
    define('APP_PATH',ROOT_PATH.DS."App".DS);  // App目录
    define('CONTROLLER_PATH',APP_PATH.PATH.DS."Controller".DS);  // Controller目录
    define('MODEL_PATH',APP_PATH.PATH.DS."Model".DS);  //Model目录
    define('VIEW_PATH',APP_PATH.PATH.DS."Model".DS.CONTROLLER.DS);  //View目录
  }
  private static function initAutoLoad()
  {
    //包含所有类文件进行自动加载
    spl_autoload_register(function ($className) {
      $arr  = [
        "..".DS."..".DS."lib".DS."smarty".DS."libs".DS."$className.class.php",
        FRAME_PATH."$className.class.php",
        MODEL_PATH."$className.class.php",
        CONTROLLER_PATH."$className.class.php",
      ];
      foreach ($arr as $fileName) {
        if (file_exists($fileName)) {
          require_once ($fileName);
        }
      }
    });
  }
  private static function initDispatch()
  {
    // 根据用户动作执行不同新闻的代码
    $className = CONTROLLER."Controller"; // 拼接控制器名称
    $actionName = ACTION; // 拼接成员函数名
    $ctrlObj = new $className(); // new一个控制器对象
    $ctrlObj->$actionName(); // 函数名称只能是一个变量，所以这里需要把常量转换为变量才能用作函数名
  }
}
