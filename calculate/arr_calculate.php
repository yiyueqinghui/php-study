<?php
/**
 * Created by PhpStorm.
 * User: yiyueqinghui
 * Date: 2018/5/14
 * Time: 17:29
 * title:数组运算符
 */
  $a=array("a"=>"apple","b"=>"banana");
  $b=array("a"=>"aaaaa","b"=>"banana","c"=>"coupon");
  $add01 = $a+$b;   //+ 运算符把右边的数组元素附加到左边的数组后面，两个数组中都有的键名，则只用左边数组中的，右边的被忽略。
  $add02 = $b+$a;
  var_dump($add01);
  echo "<br/>";
  var_dump($add02);
  echo "<br/>";


?>