<?php
//php生成随机数  方法一        mt_rand(min,max)   返回随机整数   
function getrandomstr($len){
	$str='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'; 
	$length = strlen($str)-1;            //控制随机数的最大范围
	$ranstr = '';
	for($i=0;$i<$len;$i++){
		$num = mt_rand(0,$length);       //产生随机数
		$ranstr .= $str[$num];           //根据随机数，获取字符串相应下标的值，并拼接
	}
	return $ranstr;
}
echo getrandomstr(6);
?>