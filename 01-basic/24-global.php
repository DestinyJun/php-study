<?php
/**
 * global关键字：
 *  （1）生命变量的作用域，可以让函数内部的变量在外部使用，也可以是外部变量在
 * 函数内使用
 *  （2）其生命变量分为两步，先声明，在赋值，不能声明赋值同时用
 *  （3）不管在哪里使用后global，都需要内外同时定义变量
 *  （4）global只能使用在函数内，因为函数外的变量本来就是全局的，声明了没意义
 *  （5）global的作用更像引用传递地址，只能算是局部全局变量，只能在函数中使用
 *  （6）如果在函数中销毁局部的全局变量，则不会影响到函数外的同名变量
 *
 * $GLOBALS超全局数组变量：
 *  （1）应用全局作用域可用的变量
 *  （2）一个包含了全部变量的全局组合数组，变量的名字就是数组的键
 *  （3）也即是出现过的全局变量，就可以通过$GLOBALS这恶鬼数组取得
 *  （4）PHP生命周期中，定义在函数体外外部的所谓的全局变量，函数内是不能直接获得的
 * 在函数内，要想访问函数外的全局变量，可以使用$GLOBAL访问、
 *  （5）$GLOBAL数组中包括：全局变量、$_GET、$_POST、$_FILES、$_COOKIE
 *  （6）如果在函数内部unset某一个超全局变量，则函数外部也不存在了
 *
 * 变量引用传递“&”：
 *  （1）引用传递，又叫做“传地址”，就是将一个变量的地址拷贝一份传给另一个变量，但两个变量其实
 * 指向的是“同一物”，改变其中一个变量的值，另一个变量的值也将跟着改变
 *  （2）在PHP中，对象和资源类型默认使用的是引用传递
 *  （3）我们也可以让标量变成引用传递，只需要在引用的变量前加上“&”符号即可实现引用传递，
 * 引用传递是一个值多个名的情况
 */
$name = '文君1';
$age = 18;
function showName (&$age) {
  global $name;
  $age = 20;
  $name = '小花';
  echo "函数内：{$name}，年龄是:{$age}";
  unset($name);
}
showName($age);
echo "<br>函数外：{$name}，年龄是:{$age}";
echo '<pre>';
print_r($GLOBALS);
function readeName() {
  $GLOBALS['name'] = '小红';
  echo __FUNCTION__.$GLOBALS['name'];
}
readeName();
$var1 = 1;
$var2 = 2;
function test() {
  global $var1,$var2; // 同名引用传递
  $var1 = &$var2; // 引用传递地址，函数中$var1的地址指向了$var2，因此，在函数内没有了 $var1
  $var1 = 7;
  echo $var1,$var2;
}
