<?php
//php生成随机数  方法三    随机时间戳
function random_unix($len=6){
	$time = substr(md5(time()),0,$len);             //再使用md5对时间戳进行加密处理
	return $time;  
}
echo random_unix();
?>