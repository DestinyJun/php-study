<?php
/**
 * 类的继承
 */
// 构造该方法的继承
require_once 'Book.php';
$arr = ['name' => '凡人修仙传','price' => 98.00, 'amount' => 18, 'number' => 'GB00001'];
$book1 = new Book($arr);
$book1 ->showInfo();
