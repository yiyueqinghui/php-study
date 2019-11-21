<?php
   //4.回调函数
   //4.1 array_filter — 用回调函数过滤数组中的单元
    $array1 = array("a"=>1, "b"=>2, "c"=>3, "d"=>4, "e"=>5);
    $filterArr = array_filter($array1,"odd");
    function odd($val){
    	if(($val%2)==1){
    		return $val;
    	}
    }
    var_dump($filterArr);
    
    //4.2 array_map(callback,array) — 为数组的每个元素应用回调函数
    function add($val){
    	return $val*$val;
    }
    $map = array_map("add",$array1);
    var_dump($map);
?>