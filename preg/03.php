<?php
// 字符串的分割和链接
// 1.preg_split($pattern,$str);通过一个正则表达式分隔字符串【返回值为数组】
   $info = "PHP is the web scripting language of choice";
   $arrs = preg_split('/[ ]/',$info);   //以空格分开
   var_dump($arrs);
   
   
// 2, explode($delimiter,$string) — 使用一个字符串分割另一个字符串,返回数组
   $arr = explode("i",$info);
   var_dump($arr);
   
// 3, impolde("+",$arr);//把$arr里的元素按照“+”链接成一个字符串
   $strs = implode("--",$arrs);
   var_dump($strs);



?>