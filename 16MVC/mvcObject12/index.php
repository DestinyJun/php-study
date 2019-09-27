<?php
// 获取应用的平台、控制器名称、动作参数，也即是路由
$p  = isset($_GET['p'])?$_GET['p']:'Home';
$c  = isset($_GET['c'])?$_GET['c']:'News';
$ac = isset($_GET['action'])?$_GET['action']:'index';
// 常用的目录常量设置
define('DS',DIRECTORY_SEPARATOR);// 目录分隔符
define('PATH',$p);                // 平台常量
define('ROOT_PATH',getcwd());    // 网站根目录
define('FRAME_PATH',ROOT_PATH.DS."Frame".DS);  // Frame目录
define('APP_PATH',ROOT_PATH.DS."App".DS);  // App目录
define('CONTROLLER_PATH',APP_PATH.PATH.DS."Controller".DS);  // Controller目录
define('MODEL_PATH',APP_PATH.PATH.DS."Model".DS);  //Model目录
define('VIEW_PATH',APP_PATH.PATH.DS."Model".DS.$c.DS);  //View目录
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
/*require_once ("../../lib/smarty/libs/Smarty.class.php");
require_once ("./Frame/Db.class.php");
require_once ("./Frame/FactoryModel.class.php");
require_once ("./Frame/BaseModel.class.php");
require_once ("./Frame/BaseController.class.php");
require_once("./App/$p/Model/UserModel.class.php");
require_once("./App/$p/Model/NewsModel.class.php");
require_once("./App/$p/Controller/UserController.class.php");
require_once("./App/$p/Controller/NewsController.class.php");*/

// 根据用户动作执行不同新闻的代码
$className = "{$c}Controller";
$ctrlObj = new $className();
$ctrlObj->$ac();

/*// 输入域名直接跳转到跳转到默认控制器
header('location:./NewsController.class.php');*/
