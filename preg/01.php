<?php
  // 字符串的匹配查找
  //1, preg_match($pattern,$arr); 按正则$pattern处理$arr,返回匹配的次数  0或1次；第一次匹配到后则不再匹配
    $arrs = "PHP is the web scripting language of choice";
    $num = preg_match('/(i)/',$arrs);
    echo "$num  <br/>";
    $num = preg_match('/(as)/',$arrs);
    echo "$num  <hr/>";
    
//  2,reg_match_all($pattern,$arr) 按正则$pattern处理$arr,返回匹配的次数 ，全局匹配，知道匹配不到为止
    $num = preg_match_all('/(i)/',$arrs);
    echo "$num  <br/>";
    
//  3,strstr — 按标识符截取字符串
    $email  = 'name@example.com';
    $domain = strstr($email,'@');        
    var_dump($domain);
    
    $domain = strstr($email,'@',true);        
    var_dump($domain);
    
    
//  4, 查找字符串出现的位置
//  strpos — 查找字符串首次出现的位置
//  strrpos — 指定字符串在目标字符串中最后一次出现的位置
//  substr($str,start,length) — 返回字符串的子串

    var_dump(strpos($email,'@'));
    
    var_dump(substr($email,5,3));

?>