<?php
  function creat_list(...$numbers){
  	$arrs = array();
  	foreach($numbers as $value){
  		array_push($arrs,$value);          //把元素依次追加入数组中
  	}
  	return $arrs;
  }
  
  list($one,$two,$three,$four) = creat_list(1,3,5,7,9);    //list() 将数组中的每一项分别赋值给一个变量
  echo "$one $two $three $four";
  
  
  
  echo "<hr/>";
  
  //引用返回
  function &arrow(){
  	 static $num = 0;        //html 第一次调用函数时执行，随后都不执行。
  	 $num+=1;
  	 echo "<br/>  $num";
  	 return $num;
  }
  //传值赋值，二者没有任何关系。
  $nums = arrow();            // $nums= 1
  $nums02 = arrow();          // $nums02=2
  
  //引用赋值，二者相互关联
  $num03 = &arrow();         // $num03=3
  $num03 = 100;               //此时，由于$num03是引用赋值，故$num03改变，那$num也会跟着变化
  $num04 = arrow();          //$num04=101 
  echo "<br/> $num04";
  
 
?>