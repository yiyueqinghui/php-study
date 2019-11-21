<?php
/**
 * Created by PhpStorm.
 * User: yiyueqinghui
 * Date: 2018/5/18
 * Time: 14:01
 * title:多个trait,    类中引用时，use trait名1,trait名2   多个trait，用逗号隔开
 */
trait SayWorld {
    public function say_world() {
        echo 'World!';
    }
}

trait SayHellow{
    public function say_hellow(){
        echo 'hellow   ';
    }
}

class MyHelloWorld{
    use SayWorld,SayHellow;

}

$o = new MyHelloWorld();
$o->say_hellow();
$o->say_world();

