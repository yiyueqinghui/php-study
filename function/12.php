<?php
	//向函数传递数组
  function total($array){
  	$total = 0;
  	for($i=0;$i<count($array);$i++){
  		if(is_numeric($array[$i])){
  		    $total += $array[$i];             			
  		}
  	}
  	return $total;
  }
  $arr = array(1,3,5);
  echo total($arr);

  //默认情况下，函数参数通过值传递（因而即使在函数内部改变参数的值，它并不会改变函数外部的值）。如果希望允许函数修改它的参数值，必须通过引用传递参数。 
  //如果想要函数的一个参数总是通过引用传递，可以在函数定义中该参数的前面加上符号 &： 
  //通过引用传递参数
  function add(&$scores){
      $scores *=2;
  }
  $goods = 60;
  add($goods);
  echo "<hr/>  $goods <br/>";   
  
  
  //默认参数
  // 默认值必须是常量表达式，不能是诸如变量，类成员，或者函数调用等。 
  // 注意当使用默认参数时，任何默认参数必须放在任何非默认参数的右侧.   

  function joinStr($name,$msg="need help"){
  	return "today,$name,$msg!   <br/>";
  }
  echo joinStr("LiSan");
  echo joinStr("XiaoMing","want to tour");
  
  //一对象作为参数
  class A {
  	 public $name = "a";
  }
  class B extends A{
  	public $info = "b";
  }
  class C{
  	public $msg = "c";
  }
  
  function blong(A $a){      //A $a 限制传入的参数对象$a,是包含A类实例化后对象的对象
  	echo get_class($a);      // get_class 是获取创建对象的类；
  	echo "<br/>";
  }
  
blong(new A);	
blong(new B); 
var_dump(new B);        
//blong(new C);       // 由于new C实例化的对象并不是来自   类A，所以会直接报错 
echo "<hr/>";



// 使用接口（interface），可以指定某个类必须实现哪些方法，但不需要定义这些方法的具体内容。
// 接口是通过 interface 关键字来定义的，就像定义一个标准的类一样，但其中定义所有的方法都是空的。
// 要实现一个接口，使用 implements 操作符。
// 类中必须实现接口中定义的所有方法，否则会报一个致命错误。类可以实现多个接口，用逗号来分隔多个接口的名称。
interface I{
	public function f();   //接口函数是空的，没有任何内容。若 public function f(){} 必定报错. 注意，其中的;必不可少。
}
class D implements I{      //用类来重写接口
	public function f(){}
}
class E { }
function f(I $i){
	echo get_class($i)."<br/>";
}

f(new D);
//f(new E);  


//可变数量的参数列表(在 PHP 5.6 及以上的版本中，由 ... 语法实现) 
function allTotal(...$numbers){
	$total = 0;
	foreach($numbers as $value){
		$total +=$value;
	}
	return $total;
}
echo allTotal(1,3,6,-2,2);


//new DateInterval()  PHP7以上的版本
//$b = new DateInterval("2018-05-31 12:00:00");
//var_dump($b);
echo "<hr/>";




?>