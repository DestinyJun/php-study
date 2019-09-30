<?php

/**
 * Index控制器
 */
namespace Home\Controller {
  use \Home\Model\IndexModel;
  final class IndexController
  {
    public function Index() {
      $modelObj = new IndexModel();
      echo '我是前台';
      print_r($modelObj->fetchAll());
      include (VIEW_PATH.'Index.html');
    }
  }
}
