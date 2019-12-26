<?php
require './sphinxapi.php';
$keyword = '纸张';
// 实例化Sphinx对象
$s = new SphinxClient();
// 连接Sphinx的查询服务
$s->SetServer('127.0.0.1',9312);
// 设置分词的匹配模式
$s->SetMatchMode(SPH_MATCH_ANY);
// 查询结果并返回
$res = $s->Query($keyword);
echo '<pre>';
if(empty($res['matches'])) {
  exit('没有查询到数据！');
}
$ids = '';
foreach ($res['matches'] as $key=>$value) {
  $ids .= ','.$key;
}
$ids = ltrim($ids,',');
$connect = mysqli_connect('127.0.0.1','root','root','news');
$sql = "select * from news_list where id in ($ids)";
$resource = $connect->query($sql);
$data = [];
while ($row = $resource->fetch_assoc()) {
  // 实现关键字高亮标红等样式，应该是正则匹配实现的
  $row = $s->BuildExcerpts($row,'news',$keyword,array(
    'before_match'=>'<span style="font-weight: bolder;color: red">',
    'after_match'=>'</span>',
  ));
  array_push($data,$row);
}
echo '<pre>';
var_dump($data);

