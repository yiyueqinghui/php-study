<?php
/**
 * Created by PhpStorm.
 * User: yiyueqinghui
 * Date: 2018/5/17
 * Time: 14:05
 * title: 析构函数
 */
//析构函数会在到某个对象的所有引用都被删除或者当对象被显式销毁时执行。

class destroys{
    function __construct()
    {
        $this->name="duzuiliunian";
        echo "hellow world!start  <br/>";
    }
    function __destruct()
    {
        echo "destroy in your name  for ".$this->name."<br/>";
        unset($this->name);
        echo $this->name;            //由于unset()已经清空了name属性，故这里会报错
    }
}

$new = new destroys();