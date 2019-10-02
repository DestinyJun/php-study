<?php
namespace Admin\Controller{
//  use \Admin\Model\IndexModel;
  use \Frame\Libs\BaseController;
  class IndexController extends BaseController
  {
    public function Index() {
//      $modelObj = IndexModel::getInstance();
//      print_r($modelObj->fetchAll());
//      $this->smarty->assign('Str','我是后台');
      $this->smarty->display('Index.html');
    }
  }
}
