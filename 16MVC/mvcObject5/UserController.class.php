<?php
//（1）包含数据模型
spl_autoload_register(function ($className) {
  $arr  = [
    "../../lib/smarty/libs/$className.class.php",
    "./libs/$className.class.php"
  ];
  foreach ($arr as $fileName) {
    if (file_exists($fileName)) {
      require_once ($fileName);
    }
  }
});
final class UserController {
  private static $smarty = null;
  public function index() {
    //（1）创建用户数据模型对象获取数据
    $UserModelObj = FactoryModel::getStance('UserModel');
    //（2）调用数据模型对象获取数据
    $totalNums = $UserModelObj->fetchCount();
    $rowDate = $UserModelObj->fetchAll();
    //（3）调用试图展示数据
    self::$smarty->assign('totalNums',$totalNums);
    self::$smarty->assign('rowDate',$rowDate);
    try {
      self::$smarty->display('./resource/UserView.html');
    } catch (Exception $e) {
      echo '<pre>';
      print_r($e);
    }
  }
  public function delete() {
    //（1）创建学生数据模型对象获取数据
    $id = $_GET['id'];
    $UserModelObj = FactoryModel::getStance('UserModel');
    $UserModelObj->fetchDelete($id);
    echo '删除成功';
    if ($UserModelObj->fetchDelete($id)) {
      header('refresh:2;url=?');
    }
  }
  public function add() {
    //（3）调用添加页面的视图数据
    try {
      self::$smarty->display('./resource/UserAddView.html');
    } catch (Exception $e) {
      echo '<pre>';
      print_r($e);
    }
  }
  public function insert() {
    $arr['name'] = $_POST['name'];
    $arr['age']  = $_POST['age'];
    $arr['sex']  = $_POST['sex'];
    $arr['wage'] = $_POST['wage'];
    $UserModelObj = FactoryModel::getStance('UserModel');
    if ($UserModelObj->fetchInsert($arr)) {
      echo '添加成功';
      header('refresh:2;url=?');
      die();
    } else {
      echo '添加失败';
      die();
    }
  }
  public function __construct()
  {
    self::$smarty = new Smarty();
    self::$smarty->left_delimiter = "{{";
    self::$smarty->right_delimiter = "}}";
  }
}
//（2）获取用户的动作参数
$ac = isset($_GET['action'])?$_GET['action']:'';
//（3）根据用户动作执行不同的代码
$userCtrlObj = new UserController();
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
}


