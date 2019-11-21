<?php
/**
 * Created by PhpStorm.
 * User: yiyueqinghui
 * Date: 2018/5/15
 * Time: 11:22
 * title:declare
 */

//一般用法是 declare(ticks=N):
//拿declare(ticks=1)来说，这句主要作用有两种：
//1、Zend引擎每执行1条低级语句就去执行一次 register_tick_function() 注册的函数。
//可以粗略的理解为每执行一句php代码（例如:$num=1;）就去执行下已经注册的tick函数。
//一个用途就是控制某段代码执行时间，例如下面的代码虽然最后有个死循环，但是执行时间不会超过5秒。
 echo "hellow world! <br/>";
 declare(ticks=1);
 $start_time = time();
 function check_timeout(){
     global $start_time;
     $space_time = 3;
     if(time()-$start_time>$space_time){
       //exit() 函数输出一条消息，并退出当前脚本。该函数是 die() 函数的别名。
         die("运行超时，大于 {$space_time} 秒<br/>");
     }
 }
// Zend引擎每执行一次低级语句就执行一下check_timeout
register_tick_function('check_timeout');

// 模拟一段耗时的业务逻辑
while(1){
    $num = 1;
}
echo "hellow world! <br/>";



?>