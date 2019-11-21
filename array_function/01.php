<?php
   $arr = [
   "10"=>11,
   "5"=>5,
   "17"=>71,
   "8"=>2,
   "0"=>0.5,
   "h"=>'hellow',
   "a"=>'abc'
   ];
   //1.排序类：【无返回值，传值引用，就直接对原数组进行了修改】
   //sort() ksort()  排序,返回布尔值，直接对原数组进行修改
   sort($arr);
   var_dump($arr);
   ksort($arr);
   var_dump($arr);
   //natsort();  区分大小写的按字母排序
   natsort($arr);
   var_dump($arr);
   echo "<hr/>";
   
?>