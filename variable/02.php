<?php
/**
 * Created by PhpStorm.
 * User: yiyueqinghui
 * Date: 2018/5/14
 * Time: 14:09
 */
//在用户自定义函数中，一个局部函数范围将被引入。任何用于函数内部的变量将被限制在局部函数范围内
//PHP 中全局变量在函数中使用时必须声明为 global。
  $info = "hellow world!!";
  function say(){
      global $info;                 //在函数内部改变其值，不会影响到函数外部的该变量的值
      $info="how are you?";
      echo $info;
  }
  echo $info;
  echo "<br/>";
  say();

//$GLOBALS 是一个超全局变量
//$GLOBALS 是一个关联数组，每一个变量为一个元素，键名对应变量名，值对应变量的内容。

 $num01=1;
 $num02=2;
 function numAdd(){
     $GLOBALS['num02']+=$GLOBALS['num01'];             //使用超全局变量，函数内部改变其值会影响函数外部的值
 }
 numAdd();
 echo "<br/>";
 echo $num02;
 echo "<hr/>";


//html  静态变量仅在局部函数域中存在，但当程序执行离开此作用域时，其值并不丢失。只在第一次调用时有用。
function Count01(){
    static $numbers=0;   //静态变量无法按照表达式的结果对其进行赋值
    echo $numbers;
    $numbers++;

}
Count01();
echo "<br/>";
Count01();
echo "<br/>";
Count01();
echo "<hr/>";

//全局和静态变量的引用
function test_global_ref() {
    global $obj;
    $obj = &new StdClass;     //PHP可以用 $object = new StdClass(); 创建一个没有成员方法和属性的空对象。
}

function test_global_noref() {
    global $obj;
    $obj = new StdClass();
}

test_global_ref();
var_dump($obj);
echo "<br/>";
test_global_noref();
var_dump($obj);

?>