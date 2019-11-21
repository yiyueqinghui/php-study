<?php
  //6.数组的数据结构【无返回值，传值引用，就直接对原数组进行了修改】
//  6.1  array_shift($arr)//从开头，删除数组第一个元素
//  6.2 array_unshift($arr,"one","two")//从开头，添加元素 ,无法指定key值
//  6.3array_pop($arr)//从结尾，删除数组最后一个元素
//  6.4 array_push($arr,"aaa");//从结尾，添加元素,无法指定key值

    $arr = [
       "apple"=>"青色",
       "banana"=>"yellow",
       "orange"=>"orange"
    ];
    array_unshift($arr,"黄色","slslslsl");
    var_dump($arr);
    
    array_pop($arr);
    var_dump($arr);
  
// 6.6.current($arr)//返回数组中的当前单元 比如是关联数组是不知道下标，可以输出当前数组的办法解决
// 6.7.key($arr)//返回当前指针指向元素的键值
// 6.8.next($arr)//当前指针下移
// 6.9.pre($arr)//当前指针上移
// 6.10.end($arr)//指针指到最后
// 6.11.reset($arr)//指针回归到开头 
   
   var_dump(current($arr));
   var_dump(next($arr));
   var_dump(end($arr));
   var_dump(reset($arr));
   
   //6.12  unset($arr)//销毁此数组
   unset($arr);
// var_dump($arr);     //再次打印就会报错

   
  
  
?>