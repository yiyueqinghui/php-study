<?php
/**
 * Created by PhpStorm.
 * User: yiyueqinghui
 * Date: 2018/5/14
 * Time: 13:45
 */
//  传值赋值
  $a=123;
  $b=$a;
  $b=456;
  echo $a;
  echo "<br/>";
  echo $b;
  echo "<hr/>";

// 引用赋值   简单地将一个 & 符号加到将要赋值的源变量前
//改动原始变量将影响到新的变量，改动新的变量将影响到原始变量，
//但销毁其原始变量,新的变量并不会受到影响
  $aa=456;
  $bb=&$aa;    
  $bb=789;
  echo $aa;
  echo "<br/>";
  echo $bb;
  
  unset($aa);      // unset() 销毁指定的变量，只是销毁了其指针,不是销毁了其内存，所以其的引用变量没有销毁
  echo $aa."<br/>";
  echo $bb;

?>