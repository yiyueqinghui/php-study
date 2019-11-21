<?php
/**
 * Created by PhpStorm.
 * User: yiyueqinghui
 * Date: 2018/5/15
 * Time: 9:34
 * title:break退出循环
 */
 $arr=array("one","two","stop","continue");
 foreach($arr as $key=>$value){
     if($value=="stop"){
         break;
     }
     echo "$key : $value <br/>";
 }
 echo "<hr/>";
 reset($arr);              //重置指针，为0；若不重置，则会承接上面的指针位置；
 while(list(,$value) = each($arr)){        //（若不需要输出键时）list中的逗号，起一个占位符的作用，占用键的位置,因为each默认取到的是键与值；
      echo " $value  <br/>";
 }

echo "<hr/>";
reset($arr);
while(list($key,$value) = each($arr)){        ////（若需要键时）直接给键变量
    echo "$key : $value  <br/>";
}

echo "<hr/>";
$i=0;
while($i<12){
    switch($i){
        case 5:
            echo "at 5 <br/>";
            break;                   //break只是退出switch循环
        case 10:
            echo "at 10 <br/>";
            break;
        default:
            break;
    }
    $i++;
}


?>