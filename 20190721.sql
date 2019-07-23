-- comment--
/*create table test_common(
  id     int unsigned primary key auto_increment comment '主键',
  s_num  char(8) unique comment '学号',
  s_name varchar(16) comment '姓名',
  s_age  tinyint unsigned not null default 18 comment '年龄',
  s_sex  char(3)          not null default '男' comment '性别'
)charset utf8;*/
# show create table test_common;
# desc test_common;
# --------------修改表结构---------------------#
create table test(
  s_name char(32)
)charset utf8;
# 给表添加字段
alter table test add s_age tinyint unsigned;
alter table test add s_nickname varchar(32) after s_name;
desc test;
# 删除表字段
alter table test drop s_nickname;
# 修改字段名 change不仅可以改字段名，还可以改字段类型
# 注意：change不仅修改字段名，字段的原类型原属性也要重新书写，不然就变为删除
alter table test change s_age age tinyint unsigned;
# 修改字段类型 modify只可以修改字段类型
alter table test modify s_name varchar(32) after age;
# 修改表名
alter table test rename to test_name;
# 修改表选项
create table test_charset(
  f1 char(9)
)charset utf8;
show create table test_charset;
alter table test_charset charset gbk;
show create table test_charset;
# 修改表的列属性（也即是字段属性）
create table test_modify(
  f1 char(8)
)charset utf8;
desc test_modify;
alter table test_modify modify f1 int unsigned;
desc test_modify;
alter table test_modify add f2 char(10);
desc test_modify;
alter table test_modify add f3 int unsigned;
alter table test_modify modify f1 int not null default 0;
alter table test_modify modify f2 char(10) unique;
alter table test_modify modify f3 int unique auto_increment;
desc test_modify;
# 添加主键
alter table test_modify add primary key (f1);
desc test_modify;
