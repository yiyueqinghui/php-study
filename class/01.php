<?php
/**
 * Created by PhpStorm.
 * User: yiyueqinghui
 * Date: 2018/5/15
 * Time: 17:11
 */

//当一个方法在类定义内部被调用时，有一个可用的伪变量 $this。$this 是一个到主叫对象的引用
//（通常是该方法所从属的对象，但如果是从第二个对象静态调用时也可能是另一个对象）。
class A{
    function foo(){
        if(isset($this)){               //isset(obj)    检测obj对象是否存在
            echo '$this is defined and to be  '. get_class($this) ."  <br/>";
        }else{
            echo "\$this is undefined <br/>";
        }
    }
}
class B{
    function bar(){
        A::foo();
    }
}

$a = new A();
$a->foo();
A::foo();                //直接调用类中的方法，不用实例化  eg：   className::methodName()

$b = new B();
$b->bar();
B::bar();



