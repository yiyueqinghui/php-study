<?php
/**
 * Created by PhpStorm.
 * User: yiyueqinghui
 * Date: 2018/5/17
 * Time: 16:54
 * title:抽象类
 */
//继承一个抽象类的时候，子类必须重定义(覆盖)父类中的所有抽象方法；
//另外，这些方法的访问控制必须和父类中一样（或者更为宽松）。
//例如某个抽象方法被声明为受保护的，
//那么子类中实现的方法就应该声明为受保护的或者公有的，而不能定义为私有的。
//此外方法的调用方式必须匹配，即类型和所需参数数量必须一致。

abstract class abstractClass
{
    //定义抽象方法，注意定义抽象方法时候别加{} ，直接  函数名(参数)  就ok ;
    abstract protected function getValue();

    abstract protected function prefixValue($info);

    public function all_say()
    {
        echo $this->getValue();
    }
}

class MyClass2 extends abstractClass{
// 继承一个抽象类的时候，子类必须重定义(覆盖)父类中的所有抽象方法
// 这些方法的访问控制必须和父类中一样（或者更为宽松）
    protected function getValue()
    {
        return "MyClass2";
    }
    public function prefixValue($info)
    {
        return "$info MyClass2";
    }
}


class MyClass3 extends abstractClass{
    public function getValue()
    {
        return "MyClass3";
    }
 // 我们的子类可以定义父类签名中不存在的(默认参数)可选参数.
 //(注意必须是  可选参数,即含有默认值的参数，调用时可有可无)
 //注意可选参数（默认参数）必须放在所有参数的最后面，不然必定报错；
    public function prefixValue($info,$tips="")
    {
        return "$info MyClass3  and $tips";
    }
}

$class2=new MyClass2();
$class2->all_say();
echo $class2->prefixValue('foos');

echo "<hr/>";

$class3=new MyClass3();
$class3->all_say();
echo $class3->prefixValue("i am a body！","and a nice people");