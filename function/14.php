<?php
  //demo1   可变函数
  //PHP 支持可变函数的概念。这意味着如果一个变量名后有圆括号，PHP 将寻找与变量的值同名的函数，并且尝试执行它。
  //可变函数可以用来实现包括回调函数，函数表在内的一些用途。 
  function add(){
  	echo "add number  <br/>";
  }
  function reduce(){
  	echo "reduce  <br/>";
  }
  function totals($score,$score02){
  	echo $score*$score02."<br/>";
  }
  
  $funcName = "add";
  $funcName();
  
  $funcName = "reduce";
  $funcName();
  
  $funcName = "totals";
  $funcName(10,20);
  
  
  //demo2  可变方法范例 
  class  Foo
{
    function  Variable ()
    {
         $name  =  'Bar' ;
         $this -> $name ();  // This calls the Bar() method
     }

    function  Bar ()
    {
        echo  "This is Bar" ;
    }
}

 $foo  = new  Foo ();
 $funcname  =  "Variable" ;
 $foo -> $funcname ();  
 
 
 
 
 //当调用静态方法时，函数调用要比静态属性优先：
 echo "<hr/>";
 class  Foos
 {
    static  $variable  =  'html property' ;
    static function  Variable ()
    {
        echo  'Method Variable called' ;
    }
}
echo  Foos :: $variable ."<br/>";  
$variable = "Variable" ;
Foos :: $variable (); 
 
 
 
  
  
  
?>