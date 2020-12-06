 -- 案例开始 --
 -- 修改语句结束符 --
 delimiter $$
 -- 创建函数 --
 create function my_sum(end_value int) returns int
 begin
     -- 声明局部变量：如果使用declare声明变量，那么必须在函数体内部其他语句之前--
     declare res int default 0;

     -- 声明循环初始值变量 --
     declare i int default 1;

     -- 循环处理 --
     my_while:while i <= end_value do
         -- 判断当前数据是否是5的倍数，是就跳出当前循环 --
         if i % 5 = 0 then
             -- 这里要注意，即使跳出当次循环，i也要累加着走 --
             set i := i + 1;
             -- 5的倍数跳出循环：流程控制，跳出当次循环 --
             iterate my_while;
         end if;
         -- 循环体：累加处理 --
         set res := res + i;
         set i := i + 1; -- MySQL中没有++的概念 --
     end while;

     -- 最后，一定要记住，函数必须有返回值 --
     return res;
 end
 -- 结束 --
 $$
-- 修改语句结束符 --
delimiter ;
