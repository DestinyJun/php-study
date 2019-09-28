<?php
/**
 * 框架初始类
 */
// 包含框架初始类文件
require_once ("./Frame/Frame.class.php");
// 调用框架初始方法
Frame::run();
/*
 // 输入域名直接跳转到跳转到默认控制器
header('location:./NewsController.class.php');
*/
/*
require_once ("../../lib/smarty/libs/Smarty.class.php");
require_once ("./Frame/Db.class.php");
require_once ("./Frame/FactoryModel.class.php");
require_once ("./Frame/BaseModel.class.php");
require_once ("./Frame/BaseController.class.php");
require_once("./App/$p/Model/UserModel.class.php");
require_once("./App/$p/Model/NewsModel.class.php");
require_once("./App/$p/Controller/UserController.class.php");
require_once("./App/$p/Controller/NewsController.class.php")
*/
