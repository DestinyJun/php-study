CREATE DATABASE user CHARSET utf8;
show create database user;
drop database user;
show databases;
create table user_list(
  id int unsigned primary key auto_increment,
  name varchar(64) not null default '',
  age char(16) not null default '18',
  wage char(32) not null default '5000'
)charset utf8;
alter table user_list add sex char(8) not null default '男' after age;
insert into user_list value(default,'张三','18','男','5000');
insert into user_list value(default,'李四','20','男','6000');
insert into user_list value(default,'王二','22','女','7000');
insert into user_list value(default,'麻子','24','女','8000');
SELECT id,news_title,idt,udt FROM news_list ORDER BY id DESC LIMIT 5;
