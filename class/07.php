<?php
/**
 * Created by PhpStorm.
 * User: yiyueqinghui
 * Date: 2018/5/16
 * Time: 18:23
 * title:类常量
 */
class MyClass{
    public $var=100;
    const constant="a constant variable";
    function showConstant(){
        echo self::constant ."<br/>";          //self::静态变量名      访问类中的静态变量
    }
}

echo MyClass::constant;          //直接访问类中的静态属性
echo "<br/>";

$className = "MyClass";          //php5.3以后
echo $className::constant;       //利用变量，动态访问类中的静态属性
echo "<br/>";

$obj = new MyClass();
echo $obj::constant;              //获取实例化后对象的属性
echo "<br/>";
echo $obj->showConstant();        //获取实例化后对象的方法
echo $obj->var;