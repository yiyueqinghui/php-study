<?php
  include("classA.php");
  
  $a = new A;
  $s = serialize($a);        //使用函数serialize()来返回一个包含字节流的字符串来表示
  // 把变量$s保存起来以便文件page2.php能够读到
  file_put_contents('store', $s);


  $info = array(1,3,5,7,9);
  file_put_contents('student',$info);