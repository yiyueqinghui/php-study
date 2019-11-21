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
这就意味着不能在函数内，循环内以及 if 语句之内用 const 来定义常量。</p>"


?>