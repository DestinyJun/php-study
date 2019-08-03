# 创建数据库
show databases;
create database operate charset utf8;
# 查看数据库创建语句
show create database operate;
# 删除数据库
drop database operate;
# 使用数据库
use demo;
show tables;
# 创建计算历史数据库
create database news charset utf8;
show tables;
use operate;
create table his_list(
  id int unsigned primary key auto_increment,
  n1 char(8) not null default '',
  n2 char(8) not null default '',
  ope char(8) not null default ''
)charset utf8;
show create table his_list;
desc his_list;
alter table `his_list` add result char(8) not null default '' after n2;
desc his_list;
select * from his_list;
insert into his_list values (default,'1','2','3','+');
