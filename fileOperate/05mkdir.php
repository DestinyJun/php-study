<?php
/**
 * Created by PhpStorm.
 * User: 42977
 * Date: 2019/8/6
 * Time: 8:48
 */
$pathname = 'D:/MyPhpstorm/phpstudy/fileOperate/xiaomei';
$pathname1 = 'D:/MyPhpstorm/phpstudy/fileOperate/haha';
$pathname2 = 'D:/MyPhpstorm/phpstudy/fileOperate/heihei.txt';
// 创建文件夹 三个参数 part是文件夹的路径 mode是文件夹的权限 recursive表示要创建文件夹的层级
// 创建一级文件夹
//$return = mkdir($pathname);
// 创建多级文件夹
//$return1 = mkdir($pathname1,666,true);

// 打开文件夹，打开是一个资源类型
//$handle = opendir($pathname);
//var_dump($handle);

// 关闭一个文件夹资源
//closedir($handle);
//var_dump($handle);

// 重命名可以改文件夹或者文件的名称
//$return = rename($pathname,'D:/MyPhpstorm/phpstudy/fileOperate/haha');
//$return1 = rename($pathname2,'D:/MyPhpstorm/phpstudy/fileOperate/heihei.txt');
//var_dump($return1);

// 删除目录
//$return = rmdir($pathname2);
//var_dump($return);

// 读取文件夹内容,只能读取当前层级的文件夹，不能读取子文件夹的内容,也需要先打开文件夹资源,每次只读取一行，并将指针下移
/*$handle = opendir($pathname1);
echo '<pre>';
while ($item = readdir($handle)) {
  echo $item,'<br/>';
}*/

// 读取当前文件夹的所有内容到数组中并返回数组，是一个索引数组，不需要打开文件夹啊
/*$item = scandir($pathname1);
echo '<pre>';
print_r($item);*/

// 判断是否是文件夹啊
$return = is_dir($pathname1);
var_dump($return);

