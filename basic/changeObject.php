<?php
   //果其它任何类型的值被转换成对象，将会创建一个内置类 stdClass 的实例。如果该值为 NULL，则新的实例为空。
  // array 转换成 object 将使键名成为属性名并具有相对应的值，
  //除了数字键，不迭代就无法被访问。
   $newObj = (object) array('1'=>"foo","name"=>"yiyueqinghui");
   var_dump($newObj);
   print('<br/>');
   var_dump(isset($newObj->{'1'}));            //isset()  检测变量是否已设置并且非 NULL,返回布尔值
   print('<br/>');
   var_dump(isset($newObj->{'name'}));
   print('<br/>');
   var_dump(key($newObj));

  //对于其他值，会包含进成员变量名 scalar。
   $obj02 = (object)'hellow';
   print('<br/>');
   echo $obj02->scalar;

?>