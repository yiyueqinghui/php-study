<?php
/**
 * Created by PhpStorm.
 * User: yiyueqinghui
 * Date: 2018/5/15
 * Time: 13:50
 * title:function
 */

//PHP 中的所有函数和类都具有全局作用域，可以定义在一个函数之内而在之外调用，反之亦然。
//不建议这样搞
function add($num){
    function reduce($people){
        $people--;
        return "$people<br/>";
    }
    $num++;
    return $num."<br/>";
}
echo add(10);
echo reduce(100);

?>