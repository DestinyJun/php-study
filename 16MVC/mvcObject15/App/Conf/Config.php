<?php
/**
 * 配置文件，保存静态的值，返回框架的初始化配置数组
 */
return array(
  // 数据库配置信息
  'db_host' => 'localhost',
  'db_user' => 'root',
  'db_pass' => 'root',
  'db_name' => 'news',
  'charset' => 'utf8',
  // 框架初始化
  'default_platform'=> 'Home',
  'default_controller'=> 'News',
  'default_action'=> 'index',
);
