<?php
/*// 输入域名直接跳转到跳转到默认控制器
header('location:./NewsController.class.php');*/
//包含所有类文件
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
require_once ('../../lib/smarty/libs/Smarty.class.php');
require_once ('./Frame/Db.class.php');
require_once ('./Frame/FactoryModel.class.php');
require_once ('./Frame/BaseModel.class.php');
require_once ('./Frame/BaseController.class.php');
require_once ('./Model/UserModel.class.php');
require_once ('./Model/NewsModel.class.php');
require_once ('./Controller/UserController.class.php');
require_once ('./Controller/NewsController.class.php');

// 获取用户的动作参数
$ac = isset($_GET['action'])?$_GET['action']:'';
// 根据用户动作执行不同新闻的代码
$newsCtrlObj = new NewsController();
switch($ac) {
  case '':
    $newsCtrlObj->index();
    break;
  case 'delete':
    $newsCtrlObj->delete();
    break;
}

//（3）根据用户动作执行不同的代码
/*$userCtrlObj = new UserController();
switch($ac) {
  case '':
    $userCtrlObj->index();
    break;
  case 'delete':
    $userCtrlObj->delete();
    break;
  case 'add':
    $userCtrlObj->add();
    break;
  case 'insert':
    if (isset($_POST['name'])) {
      $userCtrlObj->insert();
    }
    break;
  case 'edit':
    if (isset($_GET['id'])) {
      $userCtrlObj->edit();
    }
    break;
  case 'update':
    if (isset($_POST['name'])) {
      $userCtrlObj->update();
    }
    break;
}*/
