<?php
/**
 * Created by PhpStorm.
 * User: yiyueqinghui
 * Date: 2018/5/18
 * Time: 9:35
 * title:对象接口
 */
//接口是通过 interface 关键字来定义的，就像定义一个标准的类一样，但其中定义所有的方法都是空的。
//接口中定义的所有方法都必须是公有，这是接口的特性。
//要实现一个接口，使用 implements 操作符。类中必须实现接口中定义的所有方法，否则会报一个致命错误。
//类可以实现多个接口，用逗号来分隔多个接口的名称。
//接口也可以继承，通过使用 extends 操作符。


//接口中也可以定义常量。
interface item{
    public function setValue($key,$value);
    public function getHtml($template);

}
class Template implements item{
    public $arr = [];
    public function setValue($key, $value)
    {
        $this->arr[$key]= $value;
    }
    public function getHtml($template)
    {
        foreach($this->arr as $key=>$value){
            $template = str_replace('{'.$key.'}',$value,$template);
        }
        return $template;
    }

}


//可扩充的接口
interface a{
    public function add();
}
interface b extends a{
    public function foo(baz $baz);
}

class d implements b{
    public function add(){

    }
    public function foo(baz $baz)   //注意必须类中所重写的方法必须与接口中所定义的方法完全一致，哪怕参数也必须一样
    {
        // TODO: Implement foo() method.
    }
}


//继承多个接口
interface face01{
    public function f01();
}
interface face02{
    public function f02();
}
interface face extends face01,face02{    //多个接口，用逗号来分隔多个接口的名称。
    public function f();
}
class face_all implements face{
    public function f01()
    {
        // TODO: Implement f01() method.
    }
    public function f02()
    {
        // TODO: Implement f02() method.
    }
    public function f()
    {
        // TODO: Implement f() method.
    }
}


//常量接口
interface const_face{
    const CONST_BOL = true;
}
echo const_face::CONST_BOL;

class const_class implements const_face{
  //  CONST_BOL = false;        //报错，常量不能被更改
    const CONST_NUM = 100;
}
