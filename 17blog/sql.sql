CREATE TABLE user(
  id int unsigned primary key auto_increment,
  username varchar(64) unique not null default '',
  password varchar(64) not null default '',
  nikename varchar(64) not null default ''
)charset utf8;
# ALTER TABLE user ADD idt timestamp default NOW() AFTER nikename;
ALTER TABLE user ADD udt timestamp default NOW() AFTER udate;
INSERT INTO user VALUES (DEFAULT,'wwj','123456','文君','2019-09-30 17:46',DEFAULT);
ALTER TABLE user ADD login_times int(11) not null default 0 AFTER last_login_time;
ALTER TABLE user ADD status smallint(1) not null default 1 AFTER login_times;
ALTER TABLE `user` MODIFY COLUMN `idt` varchar(50)comment '注册时间';
desc links;
show tables;
show create table user; # 查看表详细信息
show full columns from links; # 查看表字段的详细信息
show full columns from links;
show full columns from category;
insert into category values(default,'计算机',default,default);
show full columns from category;
