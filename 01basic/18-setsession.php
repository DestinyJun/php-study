<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/1/18 0018
 * Time: 21:25
 */
// 由于开启session会损耗性能，因此默认不开启session，两种方法可开启session，第一就是去配置PHP.ini,第二就是用代码开启
// 开启session,开启存放箱子，有箱子就找已有的箱子，没有就新建一个
session_start();
$_SESSION['key1'] = 'value1';