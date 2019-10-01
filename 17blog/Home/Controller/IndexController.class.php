<?php

/**
 * Index控制器
 */
namespace Home\Controller {
  use \Frame\Libs\BaseController;
  use \Home\Model\IndexModel;
  final class IndexController extends BaseController
  {
    public function Index() {
      $modelObj = IndexModel::getInstance('\Home\Model\IndexModel');
      // print_r($modelObj->fetchAll());
      $this->smarty->assign('str','我爱祖国');
      $this->smarty->display('Index.html');
    }
  }
}
