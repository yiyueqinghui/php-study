<?php
//7.其他
//7.1 array_rand($arr,2);//随机返回两个$arr数组当中的key【返回值为值或者数组】
  $input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
  $ranArr = array_rand($input,2);
  var_dump($ranArr);
  
//7.2 shuffle($arr)//随机的重组$arr，顺序变乱【改变原数组，返回布尔值，保留键值】
  $newarr = shuffle($input);
  var_dump($input);  
  
//7.3 array_sum($arr);//返回$arr的value的和【返回一个值】  
  $nums = [1,3,5,7,9];
  var_dump(array_sum($nums));


//7.4  range(start,end,step) — 根据范围创建数组，间隔元素为step
  $arrs = range(0,10,2);
  var_dump($arrs);


?>