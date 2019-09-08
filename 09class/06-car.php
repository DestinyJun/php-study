<?php
require_once './Car.php';
$arr = array(
  'name' => '博瑞GE',
  'size' => '5029*1890',
  'price' => '159800'
);
$arr1 = array(
  'name' => '博越',
  'size' => '4780*1890',
  'price' => '138900'
);
$car1 = new Car($arr);
$car2 = new Car($arr1);
echo $car1 -> showInfo();
echo $car2 -> showInfo();
