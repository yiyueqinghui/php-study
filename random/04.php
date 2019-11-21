<?php
//php生成随机数  方法四      str_shuffle()随机地打乱字符串中的所有字符
  function getranstr($len=6){
  	 $str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
  	 $newstr = str_shuffle($str);
  	 $randstr = substr($newstr,0,$len);
  	 return $randstr;
  }
  echo getranstr();
?>