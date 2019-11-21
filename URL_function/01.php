<?php
// parse_url($url)//返回该URL的所有信息，[scheme协议][host域名] [path路径][query参数][fragment片段]  【返回含信息的数组】
   $url = 'https://www.baidu.com?a=123&&b=hellow#122';
   $arr = parse_url($url);
   var_dump($arr);   
   //parse_str($params_str,$get)     把参数字符串简析为相应的键值对数组,保存到$get中
   parse_str($arr['query'],$get);
   var_dump($get);	
   
   
// pathinfo($url)//["dirname"目录名] ["basename"文件名] ["extension"文件后缀]【返回含信息的数组，下标不同】
   $allInfo = pathinfo('/php_myself_study/URL_function/01.php');
   var_dump($allInfo);
	

// urlencode($url)//对该URL进行编码；原因：防止乱码，解决空格的呢个字符不能传递问题，form也是此编码格式传递
   $newurl = 'https://www.baidu.com?a= 123&&b=独醉流年'; 	
   $enUrl = urlencode($newurl);
   var_dump($enUrl);
   

// urldecode($url)//对该URL进行解码 
   $deUrl = urldecode($enUrl);
   var_dump($deUrl);

?>
