<?php
/**
 * Class WjDb
 * 一个数据库操作类
 */

class WjDb
{
  // 定义常量
  // 定义静态属性
  // 定义成员属性（一般都是私有）
  /**
   * 定义私有数据库配置信息
   */
  private $db_host; // 主机名
  private $db_user; // 用户名
  private $db_pass; // 数据库密码
  private $db_name; // 数据库名
  private $charset; // 字符集

  /**
   * 构造方法初始化需要做如下事情:
   *  （1）初始化数据库数据
   *  （2）连接数据库
   *  （3）选择数据库字符集
   *  （4）设置字符集
   */
  public function __construct($config)
  {
    $this->db_host = $config['db_host'];
    $this->db_user = $config['db_user'];
    $this->db_pass = $config['db_pass'];
    $this->db_name = $config['db_name'];
    $this->charset = $config['charset'];
    /**
     * 初始化需要组做的事情，其设计原则时一个函数只做一件事
     */
    // 连接数据库
    $this->connectDb();
    // 选择数据库
    $this->selectDb();
    // 设置数据库字符集
    $this->setCharset();
  }
  /**
   * 定义静态方法
   */
  /**
   * 定义成员方法
   */
  // 私有函数连接数据库
  private function connectDb()
  {
    if (!@mysql_connect($this->db_host,$this->db_user,$this->db_pass))
       die("PHP连接数据库失败");
  }
  // 私有函数选择数据库
  private function selectDb()
  {
    if (!(mysql_select_db($this->db_name)))
      die("选择数据库{$this->db_name}失败！");
  }
  // 私有的设置数据库字符集
  private function setCharset()
  {
    mysql_query("set names {$this->charset}");
  }
}
