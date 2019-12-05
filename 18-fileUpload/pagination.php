<?php
/**
 * Created by PhpStorm.
 * User: 42977
 * Date: 2019/8/4
 * Time: 10:18
 */
$curPage = isset($_REQUEST['curPage'])?$_REQUEST['curPage']:1;
$pageNumString = '';
$totalPage = 21;
/*if ($totalPage <= 10) {
    $begin = 1;
    $end = $totalPage;
}
if ($totalPage >10 && $curPage<=5) {
    $end = 10;
    $begin = 1;
}
if ($totalPage >10 && $curPage >5) {
    if ($curPage + 5 >= $totalPage) {
        $end = $totalPage;
        $begin = $end - 9;
    } else {
        $end = $curPage + 5;
        $begin = $end - 9;
    }
}*/
// $curPage根据接收到的页码进行分页的
if ($curPage <= 5) {
    $begin = 1;
    $end = $totalPage>=10?10:$totalPage;
} else {
    $end = $curPage+5 >$totalPage?$totalPage:$curPage+5;
    $begin = $end - 9<1?1:$end - 9;
}
for ($i=$begin;$i<=$end;$i++) {
    if ($i == $curPage) {
        $pageNumString.="<a class='page-link' href='pagination.php?curPage=$i'><span style='color: red;'>$i&nbsp;&nbsp;&nbsp;</span></a>";
    } else {
        $pageNumString.="<a class='page-link' href='pagination.php?curPage=$i'>$i&nbsp;&nbsp;&nbsp;</a>";
    }

}
echo $pageNumString;
