<?php
  // 5.拆分，合并，分解，接合数组
  //5.1 array_slice — 从数组中取出一段       默认会重新排序并重置数组的数字索引
   $input = array("a", "b", "c", "d", "e");
   $output = array_slice($input,1);
   var_dump($output);
   $output = array_slice($input,2,3);
   var_dump($output);
   
   $ar = array('a'=>'apple', 'b'=>'banana', '42'=>'pear', 'd'=>'orange'); 
   $output = array_slice($ar,2,2);
   var_dump($output);
   $output = array_slice($ar,2,2,true);    //true,不重置原来数组的索引
   var_dump($output);
  
  //5.2 array_splice($array,$offset[,$length[,$replacement]])  去掉数组中的某一部分并用其它值取代,改变原数组
  $input = array("red", "green", "blue", "yellow");
  array_splice($input,2);            //删除
  var_dump($input);
  
  $input = array("red", "green", "blue", "yellow");
  array_splice($input,2,2,"black");     //修改替换
  var_dump($input);
  
  $input = array("red", "green", "blue", "yellow");
  array_splice($input,2,0,['土色','天蓝色']);            //插入
  var_dump($input);
  
  
  //5.3 array_combine($arr1,$arr2);//数组$arr1为KEY,$arr2为VALUES结合形成新索引数组【返回索引数组】
  $a = array('1', '2', '3');
  $b = array('avocado', 'apple', 'banana');
  $c = array_combine($a,$b);
  var_dump($c);
  
  
  //5.4 array_merge($arr1,$arr2,$arr3...);//数组进行合并，保留键值，若键重复，后来者居上【返回新数组】
  $array1 = array("color" => "red", 2, 4);
  $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
  $merge = array_merge($array1,$array2);
  var_dump($merge);
  
  
  //array_intersect($arr1,$arr2)//返回两个数组的值的交集，键以前一个数组为准
  $array1 = array("a" => "green", "red", "blue");
  $array2 = array("b" => "green", "yellow", "red");
  $arr = array_intersect($array1,$array2);
  var_dump($arr);
  
 //array_diff($arr1,$arr2)//返回两数组的差集，返回的值为第一个数组的值，键值不变
  $arr = array_diff($array1,$array2);
  var_dump($arr);
  
  
  //array_chunk($arr,2)//分割数组,把$arr按照【2个为一组】均等分割【返回一个二维数组】
  $input_array = array('a', 'b', 'c', 'd', 'e');
  $arr = array_chunk($input_array,2);
  var_dump($arr);
  
  
?>