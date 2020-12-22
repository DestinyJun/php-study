<?php
$str = file_get_contents('test.txt');
$obj  = unserialize($str);
//var_dump($obj);
echo $obj->name;
