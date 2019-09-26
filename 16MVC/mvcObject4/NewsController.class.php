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
final class NewsController {
  public function index() {
    //（1）创建学生数据模型对象获取数据
    $stuObj = FactoryModel::getStance('NewsModel');
    //（2）调用数据模型对象获取数据
    $totalNums = $stuObj->fetchCount();
    $rowDate = $stuObj->fetchAll();
    //（3）调用试图展示数据
    $smarty = new Smarty();
    $smarty->left_delimiter = "{{";
    $smarty->right_delimiter = "}}";
    $smarty->assign('totalNums',$totalNums);
    $smarty->assign('rowDate',$rowDate);
    try {
      $smarty->display('./resource/NewsView.html');
    } catch (Exception $e) {
      echo '<pre>';
      print_r($e);
    }
  }
  public function delete() {
    //（1）创建学生数据模型对象获取数据
    $id = $_GET['id'];
    $stuObj = FactoryModel::getStance('NewsModel');
    $stuObj->fetchDelete($id);
    echo '删除成功';
    if ($stuObj->fetchDelete($id)) {
      header('refresh:2;url=?');
    }
  }
}
//（2）获取用户的动作参数
$ac = isset($_GET['action'])?$_GET['action']:'';
//（3）根据用户动作执行不同的代码
$newsCtrlObj = new NewsController();
switch($ac) {
  case '':
    $newsCtrlObj->index();
    break;
  case 'delete':
    $newsCtrlObj->delete();
    break;
}

