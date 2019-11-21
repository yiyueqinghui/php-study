<?php
/**
 * Created by PhpStorm.
 * User: yiyueqinghui
 * Date: 2018/5/14
 * Time: 17:38
 * title:instanceof
 */

//instanceof 用于确定一个 PHP 变量是否属于某一类 class 的实例：
 class MyFirst{

};
class MySecond{

};
$first=new MyFirst();
var_dump($first instanceof MyFirst);
var_dump($first instanceof MySecond);


?>