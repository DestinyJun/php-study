<?php
// 同一个文件生命多个命名空间
// 使用{}语法看着更加简洁方便
namespace App\Home\Controller{
  // 子空间下的类
  class Student {
    private $name = '文君';
    public function __construct()
    {
      echo "<br>我是子空间Controller下的：我的名字叫：{$this->name}";
    }
  }
}
// 同一个文件声明多个空间
namespace App\Home\Model {
  class Student {
    private $name = '文君';
    public function __construct()
    {
      echo "<br>我是Model空间下的：我的名字叫：{$this->name}";
    }
  }
  $a = '<br>我是大括号内的普通全局变量$a';
//  $obj1 = new namespace\Student();
}
namespace {
  class Student {
    private $name = '文君';
    public function __construct()
    {
      echo "<br>我是全局的：我的名字叫：{$this->name}";
    }
  }
  $b = '<br>我是在匿名空间中的全局的普通变量$b';
}
