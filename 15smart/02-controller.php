<?php
/**
 * smarty模板引擎：
 *
 * smarty基础定界符配置：
 *（1）左右定界符跟css、js的{}冲突，因此需要配置定界符的符号: $smarty->left_delimiter = "{{"
 * $smarty->right_delimiter = "}}"
 *
 * smarty常用目录配置：
 * （1）设置视图文件目录：$smarty->setTemplateDir(新目录路径)
 * （2）读取视图文件目录：$smarty->getTemplateDir():array
 * （3）设置编译目录：$smarty->setCompileDir()
 * （4）读取编译目录：$smarty->getCompileDir()
 * （5）设置配置目录：$smarty->setConfigDir()
 * （6）读取配置目录：$smarty->getConfigDir()
*/

spl_autoload_register(function ($className) {
  // 定义所需要的类文件的路径数组
  $arr = [
    "./libs/smarty/libs/$className.class.php",
  ];
  // 循环判断类文件路径是否存在，存在就加载
  foreach ($arr as $filename) {
    if (file_exists($filename)) require_once($filename);
  }
});
// 创建smarty类文件
$smarty = new Smarty();
$smarty->
// smarty配置定界符
$smarty -> left_delimiter = "{{";
$smarty -> right_delimiter = "}}";
// smarty配置静态模板文件目录
$smarty->setTemplateDir('./resource');
// 向视图文件赋值
$smarty->assign('name','文君');
$smarty->assign('age','18');
// 显示视图文件
try {
  $smarty->display('./view.html');
} catch (Exception $e) {
  var_dump($e);
}
?>
