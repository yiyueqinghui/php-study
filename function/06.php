<?php
/**
 * Created by PhpStorm.
 * User: yiyueqinghui
 * Date: 2018/5/17
 * Time: 18:19
 * title:可选参数（默认参数）
 */

//注意：可选参数必须放在所有参数的末尾，否者必报错；（不然调用输入参数时，不知道参数如何对应）
$total =0;
function add($num01,$num02=10,$num03=4){
    global $total;
    $total+=($num01+$num02+$num03);
    return $total;
}
//未传参数，则取默认参数
echo add(100)."<hr/>";

//传参数，取当前传的参数
echo add(100,100,30)."<hr/>";

