<?php
/**
 * Created by PhpStorm.
 * User: yiyueqinghui
 * Date: 2018/5/14
 * Time: 10:59
 */
//a method
function my_callback_function() {
    echo 'hello world001!';
}

// An example callback method
class MyClass {
    static function myCallbackMethod() {
        echo 'Hello World002!';
    }
}

// Type 1: Simple callback
//call_user_func — 调用方法，后面的参数作为该方法的参数传入
call_user_func('my_callback_function');
echo "<br/>";

// Type 2: Static class method call 数组方式，调用类中的方法
call_user_func(array('MyClass', 'myCallbackMethod'));
echo "<br/>";

// Type 3: Object method call 数组方式 调用对象中的方法
$obj = new MyClass();
call_user_func(array($obj, 'myCallbackMethod'));
echo "<br/>";

// Type 4: Static class method call (As of PHP 5.2.3)  字符串方式，调用静态类中的方法
call_user_func('MyClass::myCallbackMethod');
echo "<br/>";
// Type 5: Relative html class method call (As of PHP 5.3.0)
class A {
    public static function who() {
        echo "A\n";
    }
}

class B extends A {
    public static function who() {
        echo "B\n";
    }
}
$ab = new A();
var_dump($ab);
echo "<br/>";
call_user_func(array('B', 'parent::who')); // A    公共静态类扩展方法上级的调用
echo "<br/>";

// Type 6: Objects implementing __invoke can be used as callables (since PHP 5.3)
class C {
    public function __invoke($name) {
        echo 'Hello ', $name, "\n";
    }
    public function add($info){
        echo $info;
    }
}

$c = new C();
var_dump($c);
call_user_func($c, 'PHP!');     //对象中的_invoke，可以被用作默认的回调函数



?>