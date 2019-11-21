<?php
	echo "<a href='https://blog.csdn.net/ty_hf/article/details/49641921'>参考链接</a>  <br/>";
	
   //返回bool
   //1, isset($a)   当$a=null或不存在时返回false, 反之返回true
   //2, empty($a)   当$a=null/""/0/"0"/array()/不存在时，返回true,反之返回false;
   
   
   //返回值为字符串类的
   //1.substr(字符串,开始地方,[返回字符串的长度]);// 截取字符串的一部分,第一个字符位置为0
   //2.strstr($email,"@"[,true])    //从头开始搜索,无true返回@后边字符，有true返回@前边的字符[strrchr对比]
   //3.substr_replace($str,$replacement,start,length)  //替换字符串中指定的内容
    
    
   //返回值为数字类的
   //1.strpos($str,"@");//返回@【第一次出现的位置】
   //2.strrpos($str,"@");//返回@【最后一次出现的位置】
   //3.strlen($string);成功则返回字符串 $string 的长度
   
   //文本处理类
   //1.strtoupper($str)//字母全转为大写【返回全大写字符串】
   //2.strtolower()//字母全转为小写【返回全小写字符串】
   //3.strtotime('2015-10-10 10:10:10');//指定时间转换为时间戳【返回时间戳】
   //4.ucword()//$str每个单词首字母大写
   //5，trim()   //去除两侧字符串的空格
   
   
   //HTML类处理
   //1.htmlspecialchars($str)//函数把【预定义字符】转换为【 HTML 实体】，&转换成&amp
   

    
?>