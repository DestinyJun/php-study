<?php
/**
* 命名空间的别名和导入
 */
require_once './03-child-namespace.php';
$obj5 = new Student();
// 导入空间不起别名
use App\Home\Controller;
$obj1 = new Controller\Student();
// 导入空间并起别名
use App\Home\Controller as Ctrl;
$obj2 = new Ctrl\Student();
//导入空间中的类不起别名,一旦在导入空中的类的下面新建对象，就会同名命名空间文件中的全局类
use App\Home\Controller\Student;
$obj3 = new Student();
//导入空间中的类起别名
use App\Home\Controller\Student as Stu;
$obj4 = new Stu();
