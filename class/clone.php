<?php
/**
 * Created by PhpStorm.
 * User: yiyueqinghui
 * Date: 2018/5/21
 * Time: 10:14
 * title:深度克隆     浅度克隆
 */

//php的clone()方法对一个对象实例进行的浅克隆,
//对象内的基本数值类型进行的是传值复制，
//而对象内的对象型成员变量,如果不重写clone方法,则为引用复制,而不是生成一个新的对象.只是复制了一个指针而已。
//即原对象中的对象成员被修改，那么复制后的对象成员也相应的会被修改

class B
{
    public $val = 10;
}
class A
{
    public $val = 20;
    public $b;

    public function __construct()
    {
        $this->b = new B();
    }
}
$obj_a = new A();
$obj_b = clone $obj_a;
$obj_a->val = 30;
$obj_a->b->val = 40;
var_dump($obj_a);
echo '<br>';
var_dump($obj_b);




//深克隆：一个对象的所有属性数据都彻底的复制，需要使用魔术方法__clone(),对其对象中的对象属性进行彻底克隆；
//使得彼此之间彻底互不影响。
class BB{
    public $val = 10;
}
class AA{
    public $val = 20;
    public $b;
    public function __construct(){
        $this->b = new BB();
    }
    public function __clone(){
        $this->b = clone $this->b;      //
    }
}

$obj_aa = new AA();
$obj_bb = clone $obj_aa;
$obj_aa->val = 30;
$obj_aa->b->val = 40;
echo "<hr/>";
var_dump($obj_aa);
echo '<br>';
var_dump($obj_bb);