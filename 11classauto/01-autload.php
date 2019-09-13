<?php
/**
 * 注意：自PHP 7.2.0起，__autload()已被弃用。 非常不鼓励依赖此功能。
 *
 * 类的自动加载：
 *  （1）类文件一般都是以.class.php结尾
 *  （2）在实际开发中，，每一个功能都要单独引入一行required（或者include）等代码，
 * 极大浪费内存，麻烦，这个时候就需要类的自动加载
 *  （3）如何解决类文件加载的问题？按需加载就行
 *
 * 常规自动加载类函数__autload()自动加载规则:
 *  （1）将每一个功能，单独定义成一个类文件
 *  （2）每一个类文件，尽量以.class.php结尾；例如：Student.class.php
 *  （3）类文件的主名，要与类名一致；例如：class Student{}
 *  （4）类名命名方式，尽量使用“驼峰式”命名，每个单词首字母大写
 *  （5）方法的命名方式，也尽量使用“驼峰式”命名，第一个单词全小写，后面单词首字母尽量大写，例如：getCode()
 *  （6）属性的命名方式，跟方法一致
 *
 * __autoload()函数的语法：
 *  （1）__autoload（）是系统函数，不是方法，名称是固定的
 *  （2）我们需要定义该函数的内容
 *  （3）该函数有一个唯一的参数，就是类名参数
 *  （4）当使用一个不存在的类时，__autoload（$className）会自动调用
 *
 * __autoload（$className）自动调用的时机：
 *  （1）当使用new关键字创建一个不存在的类的对象时，会自动调用，例如：$obj = new Student()
 *  （2）当使用静态方式调用不存在的类的属性或方法时，会自动调用。例如：Student::getCode()
 *  （3）当继承一个不存在的父类时会自动调用，例如：class ItcastStudent extends Student{}
 *  （4）当实现一个不存在的接口类是会自动调用，例如：class Student implements Inter{}
 *
 *  使用__autoload()函数的方式有以下两步：
 *  （1）构建类文件的真实路径
 *  （2）判断文件路径是否存在并包含类文件代码
 */
//require_once './Student.class.php';
// 使用类的自动加载
function __autoload($className) {
  // 构建类文件的真实路径
  $fileName = "$className.class.php";
  // 判断并包含类文件代码
  if (file_exists($fileName)) require_once ($fileName);
}
// 创建学生类对象
$student1 = new Student();
// 创建教师类对象
$teacher1 = new Teacher();
