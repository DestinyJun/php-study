<?php
/**
 * 控制器
 */
require_once('../lib/smarty/libs/Smarty.class.php');
// （1）包含数据模型类
require_once('./model/DateModal.class.php');
// （2）获取客户传递的参数
$type = isset($_GET['type'])?$_GET['type']:3;
// （3）根据参数调用相应的数据模型方法获取数据
switch($type){
  case '1':
    $str = DateModal::timer();
    break;
  case '2':
    $str = DateModal::day();
    break;
  case '3':
    $str = DateModal::dayTime();
    break;
}
// （4）调用view显示数据
$smarty = new Smarty();
$smarty->left_delimiter = "{{";
$smarty->right_delimiter = "}}";
$smarty->assign('str',$str);
try {
  $smarty->display('./resource/view.html');
} catch (Exception $err) {
  echo '<pre>';
  print_r($err);
}
