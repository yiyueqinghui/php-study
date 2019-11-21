<?php
/**
 * Created by PhpStorm.
 * User: yiyueqinghui
 * Date: 2018/5/21
 * Time: 10:46
 * title:定义的的类只是初始化的值 ，有可能每次调用时其内的值都不一样，创建对象之前执行__construct函数
 */
class add{
    static $num=0;
    public $num02;
    public function add_num(){
       return self::$num;
    }
    public function __construct()
    {
//        $this->num02 = ++self::$num;    相等于
         self::$num+=1;
         $this->num02 = self::$num;
    }
}

$obj1 = new add();
var_dump($obj1);
echo $obj1->add_num();

echo "<hr/>";

$obj2 = new add();
var_dump($obj2);
echo $obj2->add_num();
