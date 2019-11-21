<?php
/**
 * Created by PhpStorm.
 * User: yiyueqinghui
 * Date: 2018/5/18
 * Time: 16:33
 * title:重载二  方法重载
 */
//在对象中（类实例化的对象中），调用一个不可访问方法时，__call() 会被调用。
//在静态上下文中（类中），调用一个不可访问方法时，__callStatic() 会被调用。
//使用 __call() 和 __callStatic() 对方法重载
class MethodTest
{
     //$name 参数是要调用的方法名称。
    //$arguments 参数是一个枚举数组，包含着要传递给方法 $name 的参数。
    public function __call($name, $arguments)
    {
        // 注意: $name 的值区分大小写
        //implode(string $glue , array $pieces)   将一个一维数组的值转化为字符串
        // $glue是一维数组每项之间的连接字符串，
        // $pieces是参数数组（如果参数是一个字符串,则默认为一个长度为1的数组）
        echo "Calling object method '$name' ". implode(', ', $arguments). "<br/>";
    }

    /**  PHP 5.3.0之后版本  */
    public static function __callStatic($name, $arguments)
    {
        // 注意: $name 的值区分大小写
        echo "Calling html method '$name' ". implode(', ', $arguments). "<br/>";
    }
}

$obj = new MethodTest;
$obj->runTest('in object context');

MethodTest::runTest('in html context');  // PHP 5.3.0之后版本