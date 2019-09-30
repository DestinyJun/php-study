#PDO编程
####1、PDO介绍
`（1）PDO就是PHP Date Object的简称`  
`（2）PDO主要用来代替数据库操作类`  
`（3）PHP同时可以操作多个数据库。例如：MySQL、SQL server、Oracle、Db2等`  
`（4）PHP 数据对象 （PDO） 扩展为PHP访问数据库定义了一个轻量级的一致接口，无论使用
   什么数据库，都可以通过一致的函数（方法）来执行查询和获取数据`  
`（5）PDO 提供了一个数据访问的抽象层，作用是统一各种数据库的接口访问，与MySQL和mssql函数库相比，
   PDO让跨数据库的使用更具亲和力，与ADODB和 MDB2相比，PDO更高效`  
`（6）有了PDO，只需使用PDO中的方法就可以对各种数据库进行操作，在选择不同的数据库时，只修改PDO的DSN即可`  
`（7)PDO就是一个系统类`  
####2、PDO链接MySQL
`（1）创建一个链接数据库的PDO实例`  
`（2）语法：PDO::__construct ( string $dsn [, string $username [, string $password [, array $driver_options ]]] )`  
`（3）$dsn：数据源的名称，包含了链接数据库的基本信息。格式："dbtype:host=主机名;port=端口号;dbname=数据库名;charset=字符集"`   
`* dbtype是指链接数据库的类型，例如：mysql,mssql,oracle;`  
`* host：数据库服务器地址`  
`* port：数据库端口号，MySQL的端口号默认3306`  
`* dbname：数据库名称`  
`* charset：字符集`   
`（4）$username：数据库的用户名`  
`（5）$password：数据库的的密码`  
####3、PDO的setAttribute方法：
`（1）设置数据库句柄属性。达到扩展的作用，比如设置查询语句返回的数据是索引模式还是关联模式`  
`（2）语法：PDO::setAttribute ( int $attribute , mixed $value ) : bool `  
`（3）例如：设置默认的提取数据的模式：$pdo ->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC); `  
####4、PDO的错误处理(PDO::ATTR_ERRMODE)
`（1）PDO的错误报告模式有三种：静默模式（默认）、警告模式、异常模式`  
 `* A：默认是静默模式，当然，我还是可以拿到错误信息的。通过 PDOException::errorCode() 和 PDO::errorInfo() 拿到 `   
 ` * B：PDO::errorCode()：获取错误状态码，如果为00000,说明没错误  `  
 ` * C：PDO::errorInfo()：获取错误的描述性信息  `  
 ` * D：PDO::errorLine()：获取错误的行号地址  `  
`（2）静默模式（PDO::ERRMODE_SILENT）：当PDO执行SQL语句有错时，不显示任何错误（默认模式）`  
`（3）警告模式（PDO::ERRMODE_WARNING）：当PDO执行SQL语句有错时，用PHP错误等级来报告信息（错误敏感信息直接包露出来，不推荐）`  
`（4）异常模式（PDO::ERRMODE_EXCEPTION）：当PDO执行SQL语句有错时，先抛出异常，再捕获异常（日志）`  
####5、SQL语句的执行过程
`（1）SQL语句的执行，分成两个阶段：编译和执行`  
`（2）如果SQL语句是第一次执行，则先编译再执行，编译过程十分复杂，耗用系统资源，相对不太安全`  
`（3）如果SQL语句是第二次执行（即相同的SQL语句），直接从缓存中读取，无疑执行效率是最高的
 也是比较安全的，可以有效避免SQL注入等安全问题`  

####6、PDO的预处理步骤（SQL语句预处理）
`（1）先提取相同结构的SQL部分！（将数据部分、可变的部分去掉）`  
`（2）编译这个相同的结构！将编译结果保存`  
`（3）再将不同的数据部分进行替换！最后执行`  

####7、PDO制作相同结构的SQL部分（两种方式）：
`（1）使用占位符":value"来代替真正的数据：insert into users values (:title,:content);`  
`（2）使用占位符"?"来代替真正的数据：insert into users values (?,?);`  
`（3）使用prepare()函数预编译SQL语句`  
`（4）使用PDOStatement::bindValue()方法给占位符绑定数据`  
`（5）使用PDOStatement::execute()方法执行绑定数据的SQL语句 `    
  
 
  
  
  
  

