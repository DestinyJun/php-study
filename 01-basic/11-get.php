<?php
/**
 * Created by PhpStorm.
 * User: 42977
 * Date: 2018/12/14
 * Time: 21:02
 */
header('Content-Type: application/json ');
header('Access-Control-Allow-Origin: *');
$a = $_GET['name'];
echo $a;