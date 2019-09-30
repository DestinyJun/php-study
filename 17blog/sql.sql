CREATE TABLE user(
  id int unsigned primary key auto_increment,
  username varchar(64) unique not null default '',
  password varchar(64) not null default '',
  nikename varchar(64) not null default ''
)charset utf8;
# ALTER TABLE user ADD idt timestamp default NOW() AFTER nikename;
ALTER TABLE user ADD udt timestamp default NOW() AFTER udt;
INSERT INTO user VALUES (DEFAULT,'wwj','123456','文君','2019-09-30 17:46',DEFAULT);
