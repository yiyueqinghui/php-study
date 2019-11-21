<?php
/**
 * Created by PhpStorm.
 * User: yiyueqinghui
 * Date: 2018/5/14
 * Time: 16:32
 * title:常量
 */
 $html='
   <h4>常量和变量有如下不同：</h4>
   <ul>
       <li>常量前面没有美元符号（$）；</li>
       <li>常量只能用 define() 函数定义，而不能通过赋值语句；</li>
       <li>常量可以不用理会变量的作用域而在任何地方定义和访问；</li>
       <li>常量一旦定义就不能被重新定义或者取消定义；</li>
       <li>常量的值只能是标量。（boolean，integer，float 和 string, resource）</li>
</ul>';
echo $html;


//定义常量的方法一
define('URL','www.baidu.com');
echo URL;
echo "<hr/>";


//定义常量的方法二
const SRC = 'const/01.php';
echo SRC;

echo "<p>和使用 define() 来定义常量相反的是，使用 const 关键字定义常量必须处于最顶端的作用区域，因为用此方法是在编译时定义的。<br/>
这就意味着不能在函数内，循环内以及 if 语句之内用 const 来定义常量。</p>";


//类中定义常量
//const在使用的时候   不可以   添加权限修饰字段public private protected   成员变量的值是 不可以 修改
//static在使用的时候  可以     添加权限修饰字段public private protected   成员变量的值是 可以 修改
//const在类内部只可以修饰成员属性，不可以修饰方法
class MyClass01{
  const CONST_INT = 100;
  public static $static_num=10.33;
  public $msg = "how are you?";
  public function add(){                         //常规方法属性
       echo "类内部访问常量".self::CONST_INT;       //类内部访问常量 ,用self
       echo "<br/>";
       echo "类内部访问静态属性".self::$static_num;        //类内部访问静态属性，用self
       echo "<br/>";
       echo "类内部访问非静态属性".$this->msg;

   self::$static_num+=888;
       echo "<br/>";
       return self::$static_num;
  }
  public static function reduce(){             //静态方法属性
       echo "类中的静态方法内部访问常量".self::CONST_INT;
       echo "<br/>";
       echo "类中的静态方法内部访问静态属性".self::$static_num;
       echo "<br/>";
       echo '静态方法内部只可访问其类中的常量，静态属性。其他的不可访问。比如说此静态方法类无法访问$msg';
//     echo "类中的静态方法内部访问非静态属性".$this->msg;     //报错
  }
}
echo MyClass01::CONST_INT."<hr/>";         //直接类中访问常量
$obj = new MyClass01();
echo $obj->add()."<hr/>";
echo $obj::CONST_INT."<hr/>";               // 实例化的对象访问常量
echo $obj::$static_num."<hr/>";             // 实例化的对象访问静态属性
echo $obj::reduce()."<hr/>";                // 实例化的对象访问静态方法


?>