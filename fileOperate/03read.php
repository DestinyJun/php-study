<?php
/**
 * Created by PhpStorm.
 * User: 42977
 * Date: 2019/8/5
 * Time: 22:38
 */
$filename = 'D:/MyPhpstorm/phpstudy/fileOperate/test.txt';
$handle = fopen($filename, 'r');
// 读取文件内容 每次读取一个字符
/*while ($char = fgetc($handle)) {
  var_dump($char);
}*/
// 读取多个字符，默认时1024,但是遇到换行，就会停止读取
//var_dump(fgets($handle));
//var_dump(fgets($handle,3)); // 读取n-1个字符

// 读取多个字符，读取到了指定字节数及文件末尾时停止,不受回车换行的影响
//var_dump(fread($handle,2000));

// 将文件中的每一行读取为数组的一个元素，并返回整个数组
/*echo '<pre>';
print_r(file($filename));*/

// 将读取的内容自动放到输出缓存
//echo '<pre>';
//readfile($filename);

// 将读取的内容全部返回，并可以用变量接受
echo '<pre>';
$return = file_get_contents($filename);
print_r($return);

