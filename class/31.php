<?php

//使用 self:: 或者 __CLASS__ 对当前类的静态引用，取决于      定义当前方法所在的类：

class A {
    public static function who() {
        echo __CLASS__;
    }
    public static function test() {
        self::who();            // 定义当前方法所在的类：       
    }
}

class B extends A {
    public static function who() {
        echo __CLASS__;
    }
}
B::test();                     // test()方法本质上在 A 类  只不过是B类引用了A类




//html::    后期静态绑定表示运行时最初调用的类;
class C {
    public static function who() {
        echo __CLASS__;
    }
    public static function test() {
        static::who();             //最初调用的类
    }
}

class D extends C {
    public static function who() {
        echo __CLASS__;
    }
}
D::test();                            