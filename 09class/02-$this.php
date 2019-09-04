<?php
/**
 * $this代表带你给钱对象，用来调用对象的属性和方法
 * $this只能在成员方法中存在（在类中），其他地方都不能使用
 * 当使用对象调用类的方法时，会自动将当前对象传递到类的方法中，
 * 在成员方法中，使用$this来代替传递过来的对象
 */
require_once './Student.php';
$student  = new Student();
// 这是借助对象的成员方法来调用类常量
//$student ->showSchool();
//  我们也可以直接调用，也叫做静态化调用
//echo '<br>';
//echo Student::HISTORY;

// 查看静态属性及方法的值
$student->showTitle();
