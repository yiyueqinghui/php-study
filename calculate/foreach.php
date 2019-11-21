<?php
/**
 * Created by PhpStorm.
 * User: yiyueqinghui
 * Date: 2018/5/14
 * Time: 17:59
 * title:foreach循环
 */
$arr=array(1,2,4,5);
foreach($arr as $value){
    echo $value."<br/>";
}
echo "<hr/>";

foreach($arr as $key=>$value){
    echo $key.' : '.$value."<br/>";
}

echo "<hr/>";
foreach($arr as $key=>&$value){        //通过在 $value 之前加上 & 来修改数组的元素
    $value*=2;
    echo "$key : $value <br/>";
}

echo "<hr/>";
reset($arr);
while(list($key,$value) =each($arr)){           //list — 把数组中的值赋给一组变量
   echo "$key : $value <br/>";
}

echo "<hr/>";
//list() 函数用于把数组中的值赋给一组变量
//注释：该函数只用于数字索引的数组。

//遍历一个数组的数组的功能并且把嵌套的数组解包到循环变量中，只需将 list() 作为值提供
$arrTwo=[
    [1,11],
    [2,22],
    [3,33]
];
foreach($arrTwo as list($one,$two)){
    echo "0: $one, 1: $two; <br/>";
}

//list() 中的单元可以少于嵌套数组的，此时多出来的数组单元将被忽略：
foreach($arrTwo as list($one)){
    echo "$one  <br/>";
}

?>