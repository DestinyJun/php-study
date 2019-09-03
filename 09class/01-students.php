<?php
/**
 * Class students
 * 创建类的对象（也即是实例化一个类）
 * 写法有三种：
 * $obj = new className;无参数无括号
 * $obj = new className（）;无参数有括号
 * $obj = new className（实参1，实参2.....）;有参数有括号
 *
 * 对象不能单独存在，对象必须属于那个类，每个实例化的对象的内存地址都是单独的，没有类就没有对象
 * 类也必须产生对象，否则也没有意义
 */
require_once './Student.php';
$student1 = new Student();
/*echo '<pre>';
print_r($student1 ->showInfo());*/

/**
 * $student1
 * （1）修改对象属性（给对象的属性从新赋值）
 * （2）对象方法的操作
 */
//访问对象的属性名时不能加$符号
$student1 -> name = '阿花';
$student1 -> age = '18';
$student1 -> sex = '女';
//给对象添加新的属性
$student1 -> address = '贵州贵阳';
// 删除对象的属性
//unset($student1 -> name,$student1 -> sex);
// 读取对象属性的值
echo '<pre>';
echo "此人的年龄是：{$student1 ->age}";
echo '<pre>';
//var_dump($student1);
// 调用对象方法（就是对方法的操作）
print_r($student1 ->showInfo());

/**
 * $student2
 */
// 创建 另外一个对象
$student2 = new Student();
echo '<pre>';
//print_r($student1 ->showInfo());
var_dump($student2);


