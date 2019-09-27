<?php
//包含所有类文件
require_once ('../../lib/smarty/libs/Smarty.class.php');
require_once ('./Frame/Db.class.php');
require_once ('./Frame/FactoryModel.class.php');
require_once ('./Frame/BaseModel.class.php');
require_once ('./Frame/BaseController.class.php');
require_once('./App/Home/Model/UserModel.class.php');
require_once('./App/Home/Model/NewsModel.class.php');
require_once('./App/Home/Controller/UserController.class.php');
require_once('./App/Home/Controller/NewsController.class.php');
// 获取应用的平台
$c = isset($_GET['p'])?$_GET['p']:'Home';
// 获取控制器名称
$c = isset($_GET['c'])?$_GET['c']:'News';
// 获取用户的动作参数
$ac = isset($_GET['action'])?$_GET['action']:'index';
// 根据用户动作执行不同新闻的代码
$className = "{$c}Controller";
$ctrlObj = new $className();
$ctrlObj->$ac();

/*// 输入域名直接跳转到跳转到默认控制器
header('location:./NewsController.class.php');*/
/*spl_autoload_register(function ($className) {
  $arr  = [
    "../../lib/smarty/libs/$className.class.php",
    "./libs/$className.class.php"
  ];
  foreach ($arr as $fileName) {
    if (file_exists($fileName)) {
      require_once ($fileName);
    }
  }
});*/
