<?php
/**
 * Created by PhpStorm.
 * User: yiyueqinghui
 * Date: 2018/5/15
 * Time: 15:48
 */
//从函数返回一个引用
function &return_reference(){
    $num = rand(0,10);
    echo $num;
    $bol = null;
    if($num>5){
        $bol = true;
    }else{
        $bol = false;
    }
    return $bol;
}
$isTrue = & return_reference();
var_dump($isTrue);



?>