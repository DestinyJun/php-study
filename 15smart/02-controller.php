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
 * smarty循环数组（foreach）：
 * （1）foreach循环语法 {{foreach $newsListA as $key=>$value}} {{/foreach}}
 * （2）第二种写法 {{foreach from='$arr' key='$key' item='$value'}} {{/foreach}}
 *
 * smarty循环数组foreach的常用属性：
 * （1）@key：输出当前值得的索引，可能是整数索引，也可能是字符索引
 * （2）@index：当前数组索引，从0开始计算
 * （3）@iteration：当前循环的次数，从1开始计算
 * （4）@first：当首次循环时，值为true
 * （5）@last：当最后一次循环时，值为true
 * （6）@total：是整个循环的次数，可以在foreach的外部或内部使用
 *
 * smarty循环数组section（几乎没啥用）：
 * （1）section循环，跟PHP的for循环相似
 * （2）for循环可以指定循环起点
 * （3）for循环可以指定循环步长
 * （4）for循环可以计算最大循环次数
 * （5）for循环只能遍历枚举数组，数组下标必须是从0开始的正整数
 * （6）for不能循环关联数组，关联数组的下标是字符串
 * （7）语法：{{section name='$i' loop='$arr' start='$i=0' step='++' max='$length'}} {{/section}}
 *    A：name代表每次循环的索引，等价于$i
 *    B：loop指定循环的数组变量，等价于$arr
 *    C：start指定循环的初始值，默认位0，从第一个元素开始循环
 *    D：step指定每次循环的步长值，默认位1
 *    E：max指定最大的循环次数
 *    F：name跟loop是必须的参数，其他可以不填，有默认值
 * （8）不能循环从1到100或从1-1000
 *
 * smarty中的if条件判断：
 * （1）smarty中的if与PHP的if语法很像，PHP中的运算符在smarty中都可以使用
 * （2）语法：
 *    A：{{if 条件判断}} {{/if}}
 *    B：{{if 条件判断}} {{else}} {{/if}}
 *    C：{{if 条件判断}} {{elseif}} {{elseif}} {{/if}}
 * （3）运算符：== eq;!= ne、neq;> gt;< it;>= gte、ge';<= lte、le; ===;! not;% mod;and 或者
 * （4）is [not] div by 【非】取模为【不】0
 * （5）is [not] even 【非】取模为0 （一元运算）
 * （6）is [not] even by水平分组 【非】平均
 * （7）is [not] odd 【非】奇数（一元运算）
 * （8）is [not] odd by【非】奇数分组
 * （9）PHP中的判断函数，可以直接使用在smarty的if判断条件中、
 *
 * smarty中的变量调节器：
 * （1）变量调节器，就是对变量进行格式化输出的函数，对变量进行格式化输出
 * （2）语法：{{$var | 调节器1:参数1:参数2:参数N | 调节器2}
 * （3）常用的格式化函数：upper：转成全大写；Lower:转成全小写；nl2br将\n换行符转成<br/>，对应PHP中的nl2br)
 * replace：查找替换，对应PHP的str_replace()；date_format：时间戳格式化，对应PHP的date()；truncate：截取
 * 字符串，对应PHP的substr()或mb_substr(),如果出现截取中文乱码，那就是按照字节截取，可以取php.ini中进行配置
*/
// 自动加载类
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
$smarty->left_delimiter = "{{";
$smarty->right_delimiter = "}}";

// smarty配置静态模板文件目录
$smarty->setTemplateDir('./resource');
// 向视图文件赋值
$smarty->assign('srt','我爱祖国');
$smarty->assign('srt2','abcdefghijk');
$smarty->assign('name','文君');
$smarty->assign('age','18'); // 传递普通变量
$smarty->assign('sex',true); // 传递布尔值
$smarty->assign('contact',array('180','187','192','546')); // 传递一维枚举数组
$smarty->assign('contactArr',array(
  array(1,'张三','男','18'),
  array(2,'李四','女','20'),
  array(3,'王二','男','22'),
)); // 传递枚举数组
// 数据库读取数据
$dsn = "mysql:host=localhost;port=3306;dbname=news;charset=utf8";
$pdo = new PDO($dsn,'root','root');
$sql = "SELECT * FROM news_list ORDER BY ID LIMIT 5";
$PDOStatment = $pdo->query($sql);
$smarty->assign('newsListA',array(
  'name' => '张三',
  'age' => '48',
  'sex' => '男',
)); // 传递一维关联数组
$smarty->assign('newsListB',$PDOStatment->fetchAll(2)); // 传递二维关联数组
// 显示视图文件
try {
  $smarty->display('./resource/view.html');
} catch (Exception $e) {
  var_dump($e);
}
?>
