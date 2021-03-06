<?php
/**
 * 类的三（四）大特征：封装性、继承性、多态性、抽象性
 * *******************************************************************
 * 类的封装性：
 *  （1）类得封装性，将敏感数据保护起来，不被外界访问
 *  （2）类得封装性再次理解：将一个功能的方方面面，封装成一个类，例如：数据库工具类，把敏感数据操作的
 * 所有反面全面封装到类中，因此，在该类外，不能再使用“mysqli_*”开头的函数
 *  （3）类得封装性实现，就是通过权限控制符来实现
 *  （4）在项目中和，所有的成员是属性，一般都是private、protected权限
 * *********************************************************************
 * 访问权限修饰符介绍：
 *  （1）public（公共权限）：在任何地方都可以被访问，主要是：类内、类外、子类中
 *  （2）protected（公受保护权限）：只能再本类、子类中被访问，在类外禁止访问
 *  （3）private（公受保护权限）：只能在本类被访问
 *  （4）成员属性、静态属性必须要加权限控制符，不能省略
 *  （5）成员方法、静态方法可以不加权限控制符，默认public，建议都要加权限
 * ********************************************************************
 * 类得继承：
 *  （1）好处：相同的代码只需要修改一次就够了
 *  （2）继承的概念：如果一个B类拥有了A类的所有特征信息
 * （全部继承，一个不剩，除了private权限外的所有成员属性和方法），则我们就认为B类继承了A类，
 * 继承还可以理解成引用传递
 *  （3）A类（别名）：父类、上层类、基础类（最顶层的类，不会再有了）
 *  （4）B类（别名）：字类、下层类、派生类
 *  （5）为什么需要继承？继承是为了实现功能的升级和扩展。如果一个项目不需要升级和扩展，则不用继承
 *  （6）功能的升级：原来有的功能，对现在的功能进行更加完善的处理
 *  （7）功能的扩展：原来没有的功能，增加一个新的功能
 *  （8）重点：“如果项目需要升级和扩展，【不能直接修改原类（一动原来的代码，问题就大了）】
 * ，需要创建一个字类，并继承父类，这样才没有问题，所以需要继承”
 * ********************************************************************
 * 继承的语法格式：
 *  （1）class Computer extends Commodity
 *  （2）Computer代表要创建的子类名称
 *  （3）extends是继承的额关键字，不区分大小写
 *  （4）Commodity代表已经存在的父类或上层类
 * ********************************************************************
 * 单继承和多继承：
 *  （1）单继承：只能从一个父类来继承功能，例如：PHP、JAVA等主流的程序语言都是单继承
 *  （2）多继承：可以同时从多个父类继承功能，例如：C++
 * ********************************************************************
 * 构造方法和析构方法的继承：
 *  （完全被继承）
 * ********************************************************************
 * parent关键字：
 *  （1）self代表当前类。parent代表父类
 *  （2）self可以用来调用本类的内容：类常量、静态属性、静态方法、成员方法
 *  （3）parent可以用来调用父类的内容：类常量、静态属性、静态方法、成员方法、构造方法
 * ********************************************************************
 * 类的多态：
 *  （1）类的多态，就是类的多种形态
 *  （2）类的多态，主要是指方法重载和方法重写
 *  （3）函数重载：在一个脚本文件中，定义两个同名函数：PHP不支持
 *  （4）方法重载：在同一个类中，定义两个同名方法：PHP不支持
 *  （5）方法重写：父类有一个方法，在子类以同样的名称再定义一次：PHP支持
 *  （6）功能升级：父类有的功能，子类的功能比它更完善、更详细，通过方法重写实现（方法重写的应用或功能）
 * 如果不需要完善和升级，就不用重写
 *  （7）方法重写时，子类中不能出现$this
 *  （8）重写的前提：必须先继承，再重写
 * ********************************************************************
 * 方法重写的要求：
 *  （1）子类中重写的方法名称，要与父类方法名称一致；
 *  （2）子类中重写的方法的参数个数，必须要与父类方法的参数个数一致
 *  （3）子类中重写的方法的类型，必须要与父类方法的类型一致；父类是成员方法，子类必须是成员方法；
 * 父类是静态方法，子类也必须是静态方法
 *  （4）子类中重写的方法权限，不能低于父类方法的权限：如果父类方法权限为public，则重写方法必须是public，因为public已经是最高级别；
 * 如果父类方法权限为protected，则重写方法必须是public或者protected；如果父类方法为private，则子类方法无法继承，无法重写
 * ********************************************************************
 * 构造方法的重写：
 *  （1）子类中重写的方法名称，要与父类方法名称一致；(肯定满足，构造方法的名称都是一样的）
 *  （2）子类中重写的方法权限，不能低于父类方法的权限：如果父类方法权限为public，则重写方法必须是public，因为public已经是最高级别；
 * 如果父类方法权限为protected，则重写方法必须是public或者protected；如果父类方法为private，则子类方法无法继承，无法重写
 *  （3）所有的方法都可以重写，但是，唯独构造方法的重写，没有参数个数必须跟父类一致的要求，也就是参数个数可以不对等
 * ********************************************************************
 * 最终类和最终方法：
 *  （1）Final关键字修饰的类就是最终类；
 *  （2）Final关键字修饰的方法就是最终方法
 *  （3）最终类：该类不能被继承，直接实例化即可，该类已经十分完善，不需要升级和扩展
 *  （4）最终方法：该方法不能被重写，直接调用即可，该方法已经十分完善，不需要升级了
 *  （5）那些类可以定义为最终类：数据库操作类
 *  （6）最终类和最终方法不能同时使用，因为最终类不能被继承，里面的方法自然不能被从重写
 * ********************************************************************
 * 抽象类和抽象方法(跟最终类和最终方法相似）：
 *  （1）Abstract关键字修饰的类，就是抽象类
 *  （2）Abstract关键字修饰的方法，就是抽象方法
 *  （3）抽象类：该类只能被继承，不能直接实例化。常用于“基础类”
 *  （4）抽象方法：该方法没有方法体（即没有{}的方法），抽象方法必须先继承，后重写
 *  （5）如果一个类中有抽象方法，该类必须声明为抽象类，即抽象类和抽象方法是同时出现的
 *  （6）抽象方法：方法的命名规范，时一种监督机制，且必须被重写（可应用于项目的多人合作和员工进度监督，
 * 如技术经理定义好抽象类和抽象方法，每个抽象方法都必须要实现，否则报错，还有因为方法命名都是
 * 写好的，员工就不会乱取方法名，导致项目维护不方便）
 *  （7）抽象类中，也可以有其它元素：成员属性、成员方法、静态属性、静态方法、类常量（也可以不写）
 *  （8）【抽象方法】不能是静态方法，必须是成员方法
 *  （9）抽象方法可以有参数，也可以没有，自己定
 *
 *
 *
 */

class Car
{
  // 先想想有没有常量，有就先定义
  const COMPANY = '<h2>吉利</h2>';
  // 静态属性
  private static $count = 0;
  // 私有属性
  private $name;
  private $size;
  private $price;
  // 构造方法：对象初始化（一定是共有的，构造函数）
  public function __construct($arr)
  {
    $this->name = $arr['name'];
    $this->size = $arr['size'];
    $this->price = $arr['price'];
    self::$count++;
  }
  // 在定义一个静态方法返回一条线
  protected static function showLine()
  {
    return '<hr>';
  }
  // 定义一个公共的返回结果的函数
  public function showInfo()
  {
    $str = self::COMPANY;
    $str.= self::showLine();
    $str.= "车名：{$this->name}<br>";
    $str.= "尺寸：{$this->size}<br>";
    $str.= "价格：{$this->price}<br>";
    $str.= "库存：".self::$count."辆<br>";
    return $str;
  }
}
