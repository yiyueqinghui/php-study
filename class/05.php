<?php
/**
 * Created by PhpStorm.
 * User: yiyueqinghui
 * Date: 2018/5/16
 * Time: 16:46
 */
//一个类可以在声明中用 extends 关键字继承另一个类的方法和属性。
//PHP不支持多重继承，一个类只能继承一个基类。
//被继承的方法和属性可以通过用同样的名字重新声明被覆盖。
//但是如果父类定义方法时使用了 final，则该方法不可被覆盖。
//可以通过 parent:: 来访问被覆盖的方法或属性。
class Big{
    function display(){
        echo "hellow!";
        return new static();
    }
}
class Small extends Big{
    //重新书写类
    function display(){
        echo "my name is small <br/>";
        parent::display();              // 可以通过 parent:: 来访问被覆盖的方法或属性
    }
}
$big = new Small();
$big->display();
