<?php
namespace Admin\Controller{
  use Admin\Model\CategoryModel;
  use Frame\Libs\BaseController;
  final class CategoryController extends BaseController{
    public function Index()
    {
      $this->auth();
      $categoryModel = CategoryModel::getInstance();
      $category_list = $categoryModel->fetchAll();
      $this->smarty->assign('category_list', $category_list);
      $this->smarty->display('Category/Index.html');
    }
  }
}
