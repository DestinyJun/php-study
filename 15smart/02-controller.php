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
 *
 * smarty中的变量：
 * （1）所有的PHP的变量，都可以传递到视图文件中使用
 * （2）但是，在视图中，对象和资源变量不常用
 *
 * smarty获取超全局数组变量:
 * （1）$smarty.get.参数 获取get
 * （2）$smarty.post.参数 获取post
 * （3）$smarty.request.参数 获取request
 * （4）$smarty.server.参数 获取server
 * （5）$smarty.session.参数 获取session
 * （6）$smarty.cookie.参数 获取cookie
 * （7）$smarty.files.参数 获取files
 *
 * smarty获取PHP常量:
 * （1）$smarty.const.PHP_INT_MAX  预定义常量的获取
 * （2）$smarty.const.DB_USER  自定义常量的获取
 *
 * smarty获取PHP时间戳:
 * （1）{{$smarty.now|date_format:'%Y-%m-%d %H:%M:%S'}}
 *  (2)在视图文件中，能用smarty解决的，绝不用PHP
 *
 * smarty配置文件变量：
 * （1）定义配置文件
 *     A：如果有一些简单的变量，就不用后端参与，前端人员可自信定义并使用
 *     B：设置配置文件的工作目录：$smarty->setConfigDir()
 *     C：读取配置文件的工作目录：$smarty->getConfigDir()
 *     D：配置文件的扩展名：.conf、.ini
 *     E：配置文件的注释：#
 * （2）在配置文件中自定义的参数 a = 公司简介
 * （3）在视图中读取配置文件中的自定义参数：{{config_load file="myConfig.conf"}}
 * 读取配置中的自定义变量(第一种方式)：{{#a#}} 读取配置中的自定义变量(第二种方式)：{{$smarty.config.a}}
 * （4）使用[]，对配置文件中自定义的变量进行分组，使得在同一配置文件中使用相同的变量名
 * [cn]a = 公司简介b = 关于我们c = 联系我们
 * （5）读取配置文件的分组变量内容 {{config_load file="myConfig.conf" section="en"}}
 *
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
// 自定义常量
const DB_HOST = 'localhost';
define('DB_USER','root'); //一定是全局的，函数内外皆能访问
// 创建smarty类文件
$smarty = new Smarty();
// smarty设置配置目录
$smarty->setConfigDir('./libs/smarty./conf');

// smarty配置定界符
$smarty -> left_delimiter = "{{";
$smarty -> right_delimiter = "}}";
// smarty配置静态模板文件目录
$smarty->setTemplateDir('./resource');
// 向视图文件赋值
$smarty->assign('name','文君');
$smarty->assign('age','18'); // 传递普通变量
$smarty->assign('sex',true); // 传递布尔值
$smarty->assign('contact',array('180','187')); // 传递数组



// 显示视图文件
try {
  $smarty->display('./view.html');
} catch (Exception $e) {
  var_dump($e);
}
?>
