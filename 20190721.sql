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
# 删除列属性
alter table test_modify modify f1 int;
alter table test_modify modify f2 char(10);
alter table test_modify modify f3 int unique;
desc test_modify;
# 删除主键 --如果auto_increment与primary 可以连用，那么想删除primary key 先要删除auto_increment
alter table test_modify modify f1 int unsigned;
alter table test_modify drop primary key;

-- 创建新表 --
create table test_unique(
  f1 char(10) unique
)charset utf8;
show create table test_unique;
# 删除unique
alter table test_unique drop key f1;
desc test_unique;
# 复制表结构
desc test_modify;
create table test_modify_bak like test_modify;
desc test_modify_bak;
# 备份sql执行结果
select * from ip_address;
drop table if exists ip_address_bak;
create table ip_address_bak select * from ip_address where math = 0;
select * from ip_address_bak;
#限制更新
update ip_address set math = math + 10 where math < 10; -- 全部更新
update ip_address set math = math + 10 where math > 0 limit 1;
#限制删除
delete from ip_address where math <= 10;
delete from ip_address where math > 10 limit 1;
# 批量插入
insert into ip_address_bak  select * from ip_address;
select * from ip_address_bak;
# 蠕虫复制
insert into ip_address_bak (ip,math,sex,aihao) select ip,math,sex,aihao from ip_address;
select * from ip_address_bak;
# 主键冲突之有就更新，没有就插入
insert into ip_address values('195.154.154.144',20,'男','打牌') on duplicate key update math = math + 50;
insert into ip_address values('195.154.154.144',20,'男','打牌') on duplicate key update math = math + 50;
# 主键冲突之冲突替换
replace into ip_address values('195.154.154.144',20,'男','打牌');
# 清空表
delete from ip_address_bak limit 1; -- 只会删除数据，不会重建索引
truncate ip_address_bak; -- 不只会删除数据，还会重建索引
# 高级查询
create table if not exists goods(
  id int unsigned unique primary key auto_increment,
  brand varchar(32) unique not null default '',
  price double not null  default 0,
  idt datetime,
  udt timestamp
)charset utf8;
show create table goods;
desc goods;
insert into goods value(default,'华为','3999','2019-07-25 16:31:30',default);
insert into goods value(default,'小米','2999','2019-06-25 17:31:30',default);
insert into goods value(default,'锤子','3199','2019-06-25 17:31:30',default);
insert into goods value(default,'vivo','3299','2019-05-25 09:31:30',default);
insert into goods value(default,'oppo','3299','2019-05-25 09:31:30',default);
insert into goods value(default,'中兴','3899','2019-04-25 08:31:33',default);
insert into goods value(default,'魅族','1899','2019-03-25 06:31:33',default);
select * from goods where id>3;
select brand from goods;
# select 选项
select all brand from goods;
select distinct idt from goods;
# 字段名
select all brand from goods;
select distinct idt from goods;
# 字段别名
select all brand as '品牌', price as '价格',idt as '插入时间' from goods;
# d多表数据源
create table goods_bac like goods;
insert into goods_bac(id,brand,price,idt,udt) select id,brand,price,idt,udt from goods;
select * from goods_bac;
select * from goods,goods_bac;
# 子查询数据源
select * from (select * from  goods) luci;
# 表别名
select * from goods as s;
# 是同表别名应用字段
select s.brand,s.price from goods s;
# group by子语句
select * from goods;
select * from goods group by brand;
desc goods;
alter table goods modify brand varchar(100) not null default '';
alter table user modify s_name varchar(100);
alter table user modify s_name varchar(120) not null default '小明';
insert into goods value(default,'华为','1999','2019-07-25 19:52',default);
insert into goods value(default,'华为','2399','2019-07-25 19:53',default);
# group by 统计函数 count计算条数
select brand,count(brand) from goods group by brand;
select brand,count(*) from goods group by brand;
# group by 统计函数 max(字段名)查询各组中最大值得条数
select brand,max(price) from goods group by brand;
select *,max(price) from goods group by brand; -- 查看整个价格最高得行 --
# group by 统计函数 min(字段名)查询各组中最小值得条数
select brand,min(price) from goods group by brand;
select *,min(price) from goods group by brand;
# group by 统计函数 avg(字段名)查询各组中指定字段的平均值
select brand,avg(price) from goods group by brand;
select *,avg(price) from goods group by brand;
# group by 统计函数 sum(字段名)查询各组中指定字段的和
select brand,sum(price) from goods group by brand;
select *,sum(price) from goods group by brand;
# 各种函数的别名使用方法，方便编程语言查询
select brand,sum(price) sum from goods group by brand;
# group by多字段分组
select * from goods group by brand,price;
# group by多字段分组使用统计函数
select price,brand,count(*) counts from goods group by price,brand;
# group by多字段分组使用统计函数 之 回溯统计
select price,brand,count(*) counts from goods group by price,brand with rollup;
# having 子语句，对group by子语句得到的数据在进行一次筛选
alter table goods add inventory int not null default 0;
alter table goods modify inventory int not null default 0 after brand;
select brand,sum(inventory) from goods group by brand having sum(goods.inventory) > 3000;
select brand,sum(inventory) sum from goods group by brand having sum > 500;
# order by 子语句是对 where子语句、group by 子语句、having子语句得到的 结果进行一次显示顺序上的控制
select * from goods order by price desc;
# order by 按照品牌，价格进行降序排序
select * from goods order by brand,price desc;
# order by 扩展 实现先排序，在分组（用到了子数据源）
select *,max(price) from (select * from goods order by price desc) lucy group by brand;
# limit 子语句 对前面四种子语句得到的结果进行显示行数的限制
select * from goods order by price desc limit 5;
# limit 子语句实现分页查询
select * from goods limit 0,3;
select * from goods limit 3,3;
select * from goods limit 6,3;
-- 数据库的联合查询 --
# 分表联合查询查询
create table goods_A select * from goods where id in(1,3,5,7,9); -- 蠕虫复制
create table goods_B select * from goods where id in(2,4,9,8,10); -- 蠕虫复制
select * from goods_B;
select * from goods_A union select * from goods_B;
insert into goods values(default,'小米','200','2199','2019-07-28 00:20', default);
# 对同一个表的不同部进行不同的操作 【华为按照价格降序 小米按照价格升序】
(select * from goods where brand='华为' order by price desc limit 9999)
union
(select * from goods where brand='小米' order by price asc limit 9999);
-- MySQL存储引擎 --
show engines;
create table test_myisam(
  id int unsigned primary key auto_increment,
  name varchar(64) not null default ''
)engine myisam charset utf8;
create table test_innodb(
  id int unsigned primary key auto_increment,
  name varchar(64) not null default ''
)engine innodb charset utf8;
