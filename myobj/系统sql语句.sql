-- 新闻项目sql语句
# 创建数据库
create database news charset utf8;
# 创建数据表
create table news_list(
  id int unsigned primary key auto_increment comment '主键',
  news_title varchar(64) not null default '' comment '新闻标题',
  news_id int unsigned not null comment '所属分类',
  news_sort tinyint unsigned not null  comment '排序',
  news_desc varchar(255) not null default '' comment '新闻描述',
  news_content text comment '新闻内容',
  idt datetime,
  udt timestamp
)charset utf8;
delete from news_list where id = '2';
