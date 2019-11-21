<?php
//字符串的替换
// 1.preg_replace($pattenr,$replace,$str);//【强大的字符串处理函数】 返回一个新的字符串
   $info = "PHP is the web scripting language of choice";
   $str = preg_replace('/(s)/','S',$info);
   var_dump($str);
   
// 2.str_replace("aaa","bbb",$str);//把$str中的aaa换成bbb,返回改变后的值
   $strs = str_replace('c','CC',$info);
   var_dump($strs);
   
?>