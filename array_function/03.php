<?php
   //3.元素个数和唯一性
   //3.1  array_unique($arr);//去掉$arr中的重复值，重复的保留第一个值，【返回数组，键值保留】
   $arrs = [
     "name"=>"yiyueqinghui",
     "age"=>31,
     "rename"=>"yiyueqinghui",
     "sex"=>"man"
   ];
   $unique_arr = array_unique($arrs);
   var_dump($unique_arr);
   
   
   //array_count_values — 统计数组中所有值出现的次数。
   $statics = array_count_values($arrs);
   var_dump($statics);
   
   //count($arr[,1])  统计$arr的元素个数，参数"1"表示统计多维数组开启，默认0为关闭【返回统计个数】
   $newarrs = [
      [1,3,5],
      [2,4,6]
   ];
   var_dump(count($newarrs));         //按照一维数组统计
   var_dump(count($newarrs,1));       //按照实际情况统计（多维数组）
   
?>