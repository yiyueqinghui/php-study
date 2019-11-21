<?php
/**
 * Created by PhpStorm.
 * User: yiyueqinghui
 * Date: 2018/5/17
 * Time: 9:36
 * title:类的自动加载
 */

//类的自动加载
//spl_autoload_register() 函数可以注册任意数量的自动加载器，
//当使用尚未被定义的类（class）和接口（interface）时自动去加载

//注意所加载的文件名 和 相应的类名要 保持一致 。因为spl_autoload_register() 加载时，是根据类名去寻找文件路径的

spl_autoload_register(function($class_name){
   require_once $class_name.'.php';
});

$obj01= new MyClass0801();
echo $obj01->say();

$obj02= new MyClass0802();
echo $obj02->add_age();
