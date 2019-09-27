<?php
/**
 * Class NewsController 新闻控制器
 * 类不单独执行，所有里面什么都不能放，只放类的东西
 */
final class NewsController extends BaseController {
  // 显示新闻列表
  public function index() {
    //（1）创建学生数据模型对象获取数据
    $stuObj = FactoryModel::getStance('NewsModel');
    //（2）调用数据模型对象获取数据
    $totalNums = $stuObj->fetchCount();
    $rowDate = $stuObj->fetchAll();
    //（3）调用试图展示数据
    self::$smarty->assign('totalNums',$totalNums);
    self::$smarty->assign('rowDate',$rowDate);
    try {
      self::$smarty->display('./App/Admin/View/News/index.html');
    } catch (Exception $e) {
      echo '<pre>';
      print_r($e);
    }
  }
  // 删除新闻
  public function delete() {
    //（1）创建学生数据模型对象获取数据
    $id = $_GET['id'];
    $stuObj = FactoryModel::getStance('NewsModel');
    $stuObj->fetchDelete($id);
    if ($stuObj->fetchDelete($id)) {
      $this->jump('删除成功','?p=Admin&c=News','2');
    } else {
      $this->jump('删除失败','?p=Admin&c=News','2');
    }
  }
}

