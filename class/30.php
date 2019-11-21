<?php
//PHP 5 可以使用类型约束。函数的参数可以指定必须为对象（在函数原型里面指定类的名字），接口，数组（PHP 5.1 起）或者 callable（PHP 5.4 起）。
//不过如果使用 NULL 作为参数的默认值，那么在调用函数的时候依然可以使用 NULL 作为实参。

//如果一个类或接口指定了类型约束，则其所有的子类或实现也都如此。

//类型约束不能用于标量类型如 int 或 string。Traits 也不允许。

//类型约束不只是用在类的成员函数里，也能使用在函数里：







//如下面的类
class MyClass
{
    /**
     * 测试函数
     * 第一个参数必须为 OtherClass 类的一个对象
     */
    public function test(OtherClass $otherclass) {
        echo $otherclass->var;
    }


    /**
     * 另一个测试函数
     * 第一个参数必须为数组 
     */
    public function test_array(array $input_array) {
        print_r($input_array);
    }

    /**
     * 第一个参数必须为递归类型
     */
    public function test_interface(Traversable $iterator) {     //Traversable   检测一个类是否可以使用 foreach 进行遍历的接口。
        echo get_class($iterator);
    }
    
    /**
     * 第一个参数必须为回调类型
     */
    public function test_callable(callable $callback, $data) {
        call_user_func($callback, $data);
    }
}

// OtherClass 类定义
class OtherClass {
    public $var = 'Hello World';
}