<?php
//（1）包含数据模型
spl_autoload_register(function ($className) {
  $arr  = [
    "../../lib/smarty/libs/$className.class.php",
    "./$className.class.php"
  ];
  foreach ($arr as $fileName) {
    if (file_exists($fileName)) {
      require_once ($fileName);
    }
  }
});
//（2）获取用户的动作参数
$ac = isset($_GET['action'])?$_GET['action']:'';
//（3）根据用户动作执行不同的代码
switch($ac) {
  case '':
    //（1）创建学生数据模型对象获取数据
    $stuObj = new NewsModel();
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
      $smarty->display('./NewsView.html');
    } catch (Exception $e) {
      echo '<pre>';
      print_r($e);
    }
    break;
  case 'delete':
    //（1）创建学生数据模型对象获取数据
    $id = $_GET['id'];
    $stuObj = new NewsModel();
    $stuObj->fetchDelete($id);
    echo '删除成功';
    if ($stuObj->fetchDelete($id)) {
      header('refresh:2;url=?');
    }
    break;
}

