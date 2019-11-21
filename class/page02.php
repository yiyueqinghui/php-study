<?php
 // 要正确了解序列化，必须包含下面一个文件
  include("classA.php");

  $s = file_get_contents('store');
  $a = unserialize($s);             // unserialize()函数能够重新把字符串变回php原来的值(实例化后的对象)
  var_dump($a);
  echo "<br/>";
  // 现在可以使用对象$a里面的函数 show_one()

  $a->show_one();

  $file = "info.txt";
  $txt = file_get_contents($file);
  $txt .= "how are you?";
  file_put_contents($file,$txt);

