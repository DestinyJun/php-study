<?php
/**
 * Created by PhpStorm.
 * User: 42977
 * Date: 2019/8/5
 * Time: 17:49
 */
$filepath = 'D:/MyPhpstorm/phpstudy/fileOperate/test.txt';
$filepath2 = './test4.txt';
//$fileopen = fopen($filepath, 'a'); // 以只读的方式打开文件，文件不存在则报错
//$fileopen = fopen($filepath2, 'r+'); // 以只读写的方式打开文件，文件不存在则报错，指针指向文件的开头
//$fileopen2 = fopen($filepath2, 'w'); // 以写的方式打开文件，如果文件不存在则创建文件，如果文件存在则清空文件
//$fileopen2 = fopen($filepath2, 'w+'); // 以读写的方式打开文件，如果文件不存在则创建文件，如果文件存在则清空文件
//$fileopen3 = fopen($filepath2, 'a');// 以追加的方式打开文件，如果文件不存在则创建文件，存在则会在文件后追加，指针指向文件的结尾
//$fileopen3 = fopen($filepath2, 'a+');// 以追加及读的方式打开文件，如果文件不存在则创建文件，存在则会在文件后追加
//var_dump($fileopen2);
//fclose($fileopen); // 关闭打开的文件子资源
//var_dump(fwrite($fileopen,'更好发挥'));
//file_put_contents($filepath,'哈啊哈'); // 不需要打开关闭文件，一次到位，直接写，不过会清空存在的内容，如果文件存在则清空

// 读取文件指针、并移动指针
//$handle = fopen($filepath,'r');
//echo ftell($handle);
//fseek($handle,2,SEEK_SET); // 三个参数，第一个是资源，第二个是偏移量，第三个是相对于哪里移动
//echo fgetc($handle);

// 文件锁，两个参数，一个文件资源 一个是锁的类型 1:LOCK_SH取得共享锁定（读取的程序）。
//2:LOCK_EX 取得独占锁定（写入的程序。
//3:LOCK_UN 释放锁定（无论共享或独占）。
$handle = fopen($filepath,'r');
flock($handle,LOCK_EX);
sleep(10);
