<?php
/**
 * Created by PhpStorm.
 * User: yiyueqinghui
 * Date: 2018/5/18
 * Time: 14:45
 * title: trait 支持抽象方法的使用。
 */
//为了对使用的类施加强制要求，trait 支持抽象方法的使用。
trait abc
{
    public function tips()
    {
        echo "be carefully!";
    }

    abstract public function tip02();           //抽象方法定义类
}
class A{
    use abc;
    public $info = "Good morning!";
    public function tip02(){                     //由于trait中这个方法时抽象的（abstract） ,故这里要重新定义
        echo $this->tips()."<br/>";
        echo "$this->info";
    }
}

$obj=new A();
$obj->tip02();

