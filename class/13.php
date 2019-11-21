<?php
/**
 * Created by PhpStorm.
 * User: yiyueqinghui
 * Date: 2018/5/17
 * Time: 15:09
 * title:
 */
//同一个类的对象,即使不是同一个实例也可以互相访问对方的私有与受保护成员。
//这是由于在这些对象的内部具体实现的细节都是已知的。
class MyClass{
    private $detail="";
    protected function say(){
        return "a private property".$this->detail."<br/>";
    }
    public function __construct($info)
    {
        $this->detail=$info;
    }
    public function baz(MyClass $myclass){
        echo '之前的$detail : '.$this->detail."<br/>";
        echo '$myclass中的$detail :'.$myclass->detail."<br/>";

        echo "<hr/>";

        echo '之前的say :'.$this->say()."<br/>";
        echo '$myclass中的say :'.$myclass->say()."<br/>";
    }

}

$obj=new MyClass('逝者如斯夫');
$obj->baz(new MyClass('不舍昼夜'));