<?php
/**
 * 命名空间案例
 */
 namespace App{
   // 学生类
   class Student {
     private $name = '文君';
     public function __construct()
     {
       echo "我的名字叫：{$this->name}";
     }
   }
   // 函数
   function showInfo () {
     echo "我要赚大钱";
   }
  // 定义一个局部常量
   const DB_HOST = 'localhost';
   // 魔术常量__NAMESPACE__构建类名 "App\Student"
   $className = __NAMESPACE__."Student";
   $obj = new $className();
 }

