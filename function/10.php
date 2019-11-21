<?php
//变量函数式匿名函数
  $say = function($name){
	echo "$name <br/>";
  };
  $say("php");

//回调式匿名函数
	function myselfs($one,$two,$func){
		if(!is_callable($func)){
			return false;
		}
		echo $one + $two + $func($one,$two);
	}
	
	myselfs(10,5,function($foo,$bar){
		$result = ($foo+$bar)*2;
		return $result;
	})



?>