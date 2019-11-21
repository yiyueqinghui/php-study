<?php
/**
 * Created by PhpStorm.
 * User: yiyueqinghui
 * Date: 2018/5/17
 * Time: 14:29
 * title:访问控制
 */
//对属性或方法的访问控制，是通过在前面添加关键字 public（公有），protected（受保护）或 private（私有）来实现的。
//被定义为（public）公有的类成员可以在任何地方被访问。
//被定义为(protected)受保护的类成员则可以被其自身以及其子类和父类访问。
//被定义为(private)私有的类成员则只能被其定义所在的类访问。
//如果没有设置这些关键字，则该方法或属性被默认为公有（public）。


class MyClass{
    public $name="duzuiliunian";
    protected $age=27;
    protected $height=178;
    private $sex="男";
    public function add_age(){
        $this->age +=1;
        echo $this->name."<br/>";
        echo $this->age."<br/>";
        echo $this->sex."<hr/>";
    }
}

$obj=new MyClass();
$obj->add_age();
echo $obj->name."<br/>";
//echo $obj->age."<br/>";              //由于age属性是受保护的，故无法访问，报错
//echo $obj->sex."<br/>";              //由于sex属性是私有属性，故无法访问，报错
echo "<br/><br/><br/><br/>";

// 可以对 public 和 protected 进行重定义，但 private 而不能
class MyClass02 extends MyClass{
    public $height = 200;
    public function say_info(){
        echo "$this->name <br/>";
        echo "$this->height <br/>";
        echo "$this->age <br/>";      //由于age是（protected）受保护的类成员，可以被其父类访问
        //echo "$this->sex <br/>";  //由于由于sex属性是私有属性，故$this无法访问到其元素的值，报错
    }

}
$obj02=new MyClass02();
$obj02->say_info();
