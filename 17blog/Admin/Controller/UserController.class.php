<?php
namespace Admin\Controller {
  use Frame\Libs\BaseController;
  use Admin\Model\UserModel;
  final class UserController extends BaseController
  {
    public function Index() {
       $modelObj = UserModel::getInstance();
       $user_list = $modelObj->fetchAll();
       $this->smarty->assign('user_list',$user_list);
       $this->smarty->display('User/Index.html');
    }
    public function delete() {
      $id = $_GET['id'];
      $modelObj = UserModel::getInstance();
      if ($modelObj->fetchDelete($id)) {
        $this->jump('删除成功','?c=user');
      }
    }
    public function add() {
      $this->smarty->display('User/add.html');
    }
    public function insert() {
      $arr['username'] = $_POST['username'];
      $arr['password'] = md5($_POST['password']);
      $arr['nikename'] = $_POST['nikename'];
      $arr['tel'] = $_POST['tel'];
      $arr['status'] = $_POST['status'];
      $arr['role'] = $_POST['role'];
      $arr['addate'] = time();
      if ($arr['password'] != md5($_POST['surepass'])){
        $this->jump('两次输入的密码不一致','?c=User&a=add');
        die();
      }
      $modelObj = UserModel::getInstance();
      if ($modelObj->fetchCount("username = '{$arr['username']}'")) {
        $this->jump("用户名{$arr['username']}已经被注册了！",'?c=User&a=add');
        die();
      }
      if ($modelObj->fetchInsert($arr)) {
        $this->jump("注册成功！",'?c=User');
        die();
      } else {
        $this->jump("注册失败！",'?c=User&a=add');
        die();
      }
    }
    public function login() {
      $this->smarty->display('User/login.html');
    }
    public function loginCheck() {
      // （1）验证表单数据来源（暂略）
      // （2）获取表单提交的额值
      $username = $_POST['username'];
      $password = md5($_POST['password']);
      $code = $_POST['code'];
      // （3）判断验证码是否正确（暂略）
      // （4）判断用户名密码是否一致,并拿到用户数组信息
      $user = UserModel::getInstance()->fetchOne("username = '{$username}' and password = '{$password}'");
      if (empty($user)) {
        $this->jump('用户名或密码不正确','?c=User&a=login');
      }
      // （5）更新用户资料
      $arr['last_login_ip'] = $_SERVER['REMOTE_ADDR'];
      $arr['last_login_time'] = time();
      $arr['login_times'] = $user['login_times'] + 1;
      if (!(UserModel::getInstance()->fetchUpdate($arr,$user['id']))) {
        $this->jump('更新用户名信息失败，请重新登陆','?c=User&a=login');
      }
      // （6）将用户信息标记存入SESSION
      $_SESSION['uid'] = $user['id'];
      $_SESSION['username'] = $user['username'];
      // （7）跳转到后台首页
      $this->jump('登陆成功！正在跳转......','?c=Index&a=Index');
    }
  }
}
