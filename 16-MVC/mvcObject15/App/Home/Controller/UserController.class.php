<?php
/**
 * Class UserController 用户控制器
 */
final class UserController extends BaseController{
  // 显示用户列表
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
      self::$smarty->display('./App/Home/View/User/index.html');
    } catch (Exception $e) {
      echo '<pre>';
      print_r($e);
    }
  }
  // 删除用户数据
  public function delete() {
    //（1）创建学生数据模型对象获取数据
    $id = $_GET['id'];
    $UserModelObj = FactoryModel::getStance('UserModel');
    $UserModelObj->fetchDelete($id);
    if ($UserModelObj->fetchDelete($id)) {
      $this->jump('删除成功','?p=Home&c=User','2');
    }
  }
  // 显示添加表单
  public function add() {
    //（3）调用添加页面的视图数据
    try {
      self::$smarty->display('./App/Home/View/User/add.html');
    } catch (Exception $e) {
      echo '<pre>';
      print_r($e);
    }
  }
  // 插入用户数据
  public function insert() {
    $arr['name'] = $_POST['name'];
    $arr['age']  = $_POST['age'];
    $arr['sex']  = $_POST['sex'];
    $arr['wage'] = $_POST['wage'];
    $UserModelObj = FactoryModel::getStance('UserModel');
    if ($UserModelObj->fetchInsert($arr)) {
      $this->jump('添加成功','?p=Home&c=User','2');
    } else {
      $this->jump('添加失败','?p=Home&c=User','2');
    }
  }
  // 显示编辑表单
  public function edit() {
    $UserModelObj = FactoryModel::getStance('UserModel');
    self::$smarty->assign('personInfo',$UserModelObj->fetchOne($_GET['id']));
    try {
      self::$smarty->display('./App/Home/View/User/edit.html');
    } catch (Exception $e) {
      echo '<pre>';
      print_r($e);
    }
  }
  // 更新用户数据
  public function update() {
    $id   = $_POST['id'];
    $arr['name'] = $_POST['name'];
    $arr['age']  = $_POST['age'];
    $arr['sex']  = $_POST['sex'];
    $arr['wage'] = $_POST['wage'];
    $UserModelObj = FactoryModel::getStance('UserModel');
    if ($UserModelObj->fetchUpdate($arr,$id)) {
      $this->jump('修改成功','?p=Home&c=User');
    } else {
      $this->jump('修改失败','?p=Home&c=User');
    }
  }
}

