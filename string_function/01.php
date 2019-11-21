<?php
   $str = "11123345 5333dfljoelEnv ie   ";
   //1、判断一个字符串的长度       strlen();
   echo strlen($str)."<hr/>";
   
   //2、字符串截取和查找   substr($str,start,length)
   echo substr($str,0,4)."<hr/>";
   
   //3,查找一个字符串$a在另一个字符串$b中首次出现的位置   strstr($b,$a)        
   echo strstr($str,'joel',true)."<br/>";   //参数为  true，则返回该位置之前的所有字符              // 111233455dfl
   echo strstr($str,'joel')."<hr/>";        //参数默认为false, 返回该位置到字符串结尾的所有字符  // joelenvie

   //4，查找字符串首次出现的下标位置(从0开始)    strpos($str,$needle) 
   //  逆向查找字符串中子串的下标位置 (下标号仍然是从左到右，从0开始)     strrpos($str,$needle)：
   echo strpos($str,"33")."<br/>";  
   echo strrpos($str,"33")."<hr/>";  
   
   //5，字符串转化
   //5.1 trim() 去除字符串两侧空格    ltrim()去除字符串左侧的空格    rtrim() 去除字符串右侧的空格
     echo trim($str)."<br/>";
   //5.2 strtoupper(): 将字符串转化为大写；   strtolower():将字符串转化为小写；   
     echo strtoupper($str)."<br/>";
     echo strtolower($str)."<br/>";
   //5.3  substr_count(‘原字符串’,’待测片段’)：测试字符串出现频率
     echo substr_count($str,"d")."<br/>";   
    //5.4 strrev()：逆置字符串。
     echo strrev($str)."<hr/>";   
     
     
    //6.字符串替换  substr_replace($str,$replacement,start,length)
    echo "$str  <----原值<br/>";
    //替换
    echo substr_replace($str,"hellow",3)."<br/>";     //默认的是替换到字符串尾部
    //插入新增
    echo substr_replace($str,"hellow",3,0)."<br/>";    //如果长度为0，则意味着指定位置插入字符串
    //删除
    echo substr_replace($str,'',6,10)."<hr/>";                //若$replacement为空，则意味着进行删除的操作
    
    
    //7.字符串转数组 
    //explode(‘标志’,$字符串)：将字符串以标志划分为若干块组成的数组；
    var_dump(explode("3",$str));                  //将字符串按照空格分开 
    echo "<br/>";
    //implode(‘标志’,$arr)：将一个一维数组的值转化为字符串
    echo implode("/",array("2009","12","12"))."<br/>";
?>