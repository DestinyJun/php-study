<?php
/**
 * 构造方法重写
 */
// 创建手机对象，（构造方法重写案例）
require_once 'Phone.php';
$phone1 = new Phone('苹果9','8888.00','苹果','贵阳市');
$phone1 ->showInfo();