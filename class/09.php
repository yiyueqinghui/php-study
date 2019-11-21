<?php

/**
 * Created by PhpStorm.
 * User: yiyueqinghui
 * Date: 2018/5/17
 * Time: 10:16
 * title:接口
 */
interface face1
{
    public function show();
}


interface face2 extends face1            //face2 继承了 face1;   face1并没有face2;
{
    public function show1(test1 $test, $num);
}


class test implements face2
{
    public function show()
    {
        echo "ok<br>";
    }

    public function show1(test1 $test,$num)       //test1 $test 是指定参数$test的类型必须为test1类的对象
    {
        var_dump($test);
        echo $test->aaaa . "$num<br>";
    }
}

class test1
{
    public $aaaa = "this is a test";

    public function fun()
    {
        echo ' ===============<br>';
    }
}

$show = new test1;
$show->fun();            //显示===============
test::show();             //显示ok
test::show1($show, 6);     //object(test1)#1 (1) { ["aaaa"]=>  string(14) "this is a test" } 6

//上面的例子可以看到，接口face2继承了接口face1，类test继承了接口face2。
//不知道你发现没有，class类test当中包括有二个方法，一个是show，一个show1，
//并且一个也不能少，如果少一个，报fatal错误。
