<?php
/**
 * Created by PhpStorm.
 * User: yiyueqinghui
 * Date: 2018/5/17
 * Time: 15:39
 * title:范围操作符 访问类中的静态成员，类常量
 */
//范围解析操作符（也可称作 Paamayim Nekudotayim）或者更简单地说是一对冒号 ::，
//可以用于访问静态成员(html)，类常量(const)，还可以用于覆盖类中的属性和方法。

class MyClass {
    const CONST_VALUE = 'A constant value';
    public static $num=100;
    public function add(){
        self::$num +=1;
    }
}

class MyClass02 extends MyClass{
    const CONST_NUM = 100;
    public $detail = "detail information!";
    public function say(){
        echo parent::CONST_VALUE."<br/>";
    }
}

$classname = 'MyClass';
echo $classname::CONST_VALUE; // :: 访问类常量
echo MyClass::CONST_VALUE;

echo $classname::$num;         // :: 访问静态成员
echo MyClass::$num;

echo "<hr/>";
echo MyClass02::CONST_NUM;      // ::访问常量
echo MyClass02::say();