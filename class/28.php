<?php

//对象复制可以通过 clone 关键字来完成   $copy_of_object = clone $object;
//当对象被复制后，PHP 5 会对对象的所有属性执行一个浅复制（shallow copy）。所有的引用属性 仍然会是一个指向原来的变量的引用
//当复制完成时，如果定义了 __clone() 方法，则新创建的对象（复制生成的对象）中的 __clone() 方法会被调用，可用于修改属性的值（如果有必要的话）。

    class SubObject
    {
        static $instances = 0;
        public $instance;

        public function __construct() {
            $this->instance = ++self::$instances;            //++self::$instances先自增再赋值
        }

        public function __clone() {
            $this->instance = ++self::$instances;
        }
    }

    class MyCloneable
    {
        public $object1;
        public $object2;

        function __clone()
        {
            // 强制复制一份this->object， 否则仍然指向同一个对象 （这样的话改变这个就不会影响那个了）
            $this->object1 = clone $this->object1;
        }
    }

    $obj = new MyCloneable();
    $obj->object1 = new SubObject();     //第一次调用SubObject类，执行__construct,结果$instances=1， $instance=1;
    $obj->object2 = new SubObject();     //第二次调用SubObject类，执行__construct,结果$instances=2， $instance=2;
  
  
    $obj2 = clone $obj;
   //clone 先执行 MyCloneable() 的__clone函数。再次强制复制一份新的object1,
   //而复制SubObject时，又会触发SubObject中的clone函数,是的$instances= 3(由于是static,故new实例化对象时，不会出现在对象中) ,$instance=3;


    print("Original Object:\n");
    print_r($obj);
	echo "<hr/>";

    print("Cloned Object:\n");
    print_r($obj2);
