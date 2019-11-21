<?php
/**
 * Created by PhpStorm.
 * User: yiyueqinghui
 * Date: 2018/5/15
 * Time: 16:28
 */
$message = 'hello';
// 没有 "use"
$example = function () {
    global $message;
    var_dump($message);
};
$example();
//echo "<hr/>";


// 匿名函数，继承变量   $message ，使用use();
$example = function () use ($message){
    echo "<hr/>";
    var_dump($message);
};
$example();

// Inherited variable's value is from when the function
// is defined, not when called
$message = 'world';
$example();

// Reset message
$message = 'hello00000000000002';

// Inherit by-reference
$example = function () use (&$message) {          //使用引用类型
    echo "<hr/>";
    var_dump($message);
};
$example();

// The changed value in the parent scope
// is reflected inside the function call
$message = 'world888888888888';
$example();

// Closures can also accept regular arguments
$example = function ($arg) use ($message) {
    echo "<hr/>";
    var_dump($arg . ' ' . $message);
};
$example("hello");


?>