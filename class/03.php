<?php
/**
 * Created by PhpStorm.
 * User: yiyueqinghui
 * Date: 2018/5/16
 * Time: 16:06
 * title:对象赋值
 */
class SimpleClass{};
$instance = new SimpleClass();

$assigned =  $instance;          //$assigned 指针指向new SimpleClass();
$reference  =& $instance;        //$reference 指针指向了 $instance;

$assigned ->var = '$assigned will have this value';       //给SimpleClass类添加属性
var_dump($instance);
echo "<br/>";
var_dump($assigned);
echo "<br/>";
var_dump($reference);
echo "<hr/>";


$instance = null; // $instance and $reference become null

var_dump($instance);
var_dump($reference);
var_dump($assigned);
