<?php
class A {
    public static function foo() {
        static::who();    //html:who()  表示这段代码运行时最初调用的类（这里最初调用的类是C），此处是相等于c::who();
    }

    public static function who() {
        echo __CLASS__."\n";          // __CLASS__  返回该类被定义时的名字
    }
}

class B extends A {
    public static function test() {
        A::foo();                     //  A::foo()    表示A类中的foo方法  这时候static::who() 相等于A::foo();
        parent::foo();                //  parent::foo()  表示自身父类的foo()方法
        self::foo();                  // self:foo()   首先走的是自身的foo()方法   这里的self指向的是B
    }
//  public html function foo(){
//      echo "bb";
//  }
    public static function who() {
        echo __CLASS__."\n";
    }
}
class C extends B {
    public static function who() {
        echo __CLASS__."\n";
    }
}

C::test();