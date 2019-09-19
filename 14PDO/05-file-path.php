<?php
/**
 * 在文件系统中访问文件的形式：相对路径、绝对路径
 *
 * 访问命名空间中的元素的方式：
 * （1）非限定名称（不含前缀）$obj=new Student() 完整路径$obj=new curSpace\Student()
 * （2）限定名称（含有相对前缀），如 $obj=new Home\Student() 完整路径$obj=new curSpace\Home\Student()
 * （3）完全限定名称（含有结对前缀）完整路径$obj=new\app \Home\Student()
 */
require_once './03-child-namespace.php';
$student1 = new \App\Home\Controller\Student();
