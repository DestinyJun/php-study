<?php
namespace Admin\Controller{
  use \Admin\Model\IndexModel;
  class IndexController
  {
    public function Index() {
      $modelObj = new IndexModel();
      print_r($modelObj->fetchAll());
      include (VIEW_PATH."Index.html");
    }
  }
}
