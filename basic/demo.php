<?php
$say_str = "hellow world!";
$age_num = 123;
$score_f = 88.8;
$is_bol = false;
//gettype()  返回函数类型
echo gettype($say_str);
echo "<br/>";
echo gettype($age_num);
echo "<br/>";
echo gettype($score_f);
echo "<br/>";
echo gettype($is_bol);
echo "<br/>";

//id_type()  检验某个变量类型,返回true/false;
if(is_string($say_str)){
    $say_str+="yiyueqinghui！";
    print($say_str);
    echo "<br/>";
}
if(is_int($age_num)){
    $age_num+=123;
    print($age_num);
    echo "<br/>";
}
if(is_float($score_f)){
    $score_f+=0.2;
    print($score_f);
    echo "<br/>";
}
if(is_bool($is_bol)){
    $is_bol = !$is_bol;                   //布尔值为true时输出"1"（字符串1），为false时输出""(空字符串)；
    echo "判断类型true/false<br/>";
    echo $is_bol;
}

?>