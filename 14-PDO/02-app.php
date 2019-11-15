<?php
require_once './01-namespace1.php';
require_once './03-child-namespace.php';
$student1 = new \App\Student();
//\App\showInfo();
//echo \App\DB_HOST;
$student2 = new \App\Home\Controller\Student();
$student3 = new \App\Home\Model\Student();
$student4 = new Student();
echo $a;
echo $b;

