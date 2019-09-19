<?php
/**
 * namespace关键字：
 * （1）含义一：声明命名空间的关键字
 * （2）含义二：可以用来代替代码当前的空间名，相当于类中的self
 *
 * 魔术常量__NAMESPACE__：
 * （1）当前命名空间的名称（区分大小写，类型是字符串）
 *
 * 命名空间的别名和导入：
 * （1）首先导入空间中的类 （注意：常量和函数不能导入）
 * （2）使用use关键字来导入空间中的类。例如：use App\Home\Controller\Student，此时默认类名的别名为最后一个单词Student
 * （3）使用use关键字来导入空间名。例如：use App\Home\Controller，此时默认的空间别名为最后一个单词Controller
 * （4）使用as关键字，可以给空间或类起别名
 * （5）给空间起别名：use App\Home\Controller as Controller
 * （6）给空间中的类起别名：use App\Home\Controller\Student as Student2
 */
require_once './03-child-namespace.php';
$obj5 = new Student();
// 导入空间不起别名
use App\Home\Controller;
$obj1 = new Controller\Student();
// 导入空间并起别名
use App\Home\Controller as Ctrl;
$obj2 = new Ctrl\Student();
//导入空间中的类不起别名,一旦在导入空中的类的下面新建对象，就会覆盖命名空间文件中的全局类
use App\Home\Controller\Student;
$obj3 = new Student();
//导入空间中的类起别名
use App\Home\Controller\Student as Stu;
$obj4 = new Stu();
