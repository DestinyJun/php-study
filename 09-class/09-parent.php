<?php
// parent 关键字
require_once 'Book.php';
$arr = ['name' => '凡人修仙传','price' => 98.00, 'amount' => 18, 'number' => 'GB00001'];
$book1 = new Book($arr);
$book1->showTime();
