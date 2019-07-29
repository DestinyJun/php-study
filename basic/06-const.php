<?php
/**
 * Created by PhpStorm.
 * User: 42977
 * Date: 2018/11/16
 * Time: 23:09
 */
// 定义常量 通过define定义一个常量，定义后不能修改，临时存放是数据
// 一般程序的配置信息都会定义在常量中，不会运行在的过程中修改

// PHP中变量或函数都采用 snake_case（小写字母+下划线命名规则
// PHP常量采用 SNAKE_CASE（大写字母+下划线命名规则
// 第一个参数常量名称 第二个参数常量的值，第三个参数忽略大小写，一般不用
define('SYSTEM_NAME','h哈哈哈哈');
echo SYSTEM_NAME;