<?php
/**
 * Created by PhpStorm.
 * User: yiyueqinghui
 * Date: 2018/5/16
 * Time: 16:22
 */
class Test{
    static public function newobj(){
        echo "hellow <br/>";
        return new static();            //html()   返回该方法所在的类（类名）
    }
}
class child extends Test{ }

$obj=new Test();
$obj02=new $obj;                            //待定。。。。。。。
var_dump($obj);
echo "<br/>";
var_dump($obj02);
echo "<br/>";
var_dump($obj==$obj02);
var_dump($obj===$obj02);
echo "<hr/>";


$obj03=Test::newobj();
var_dump($obj03);
echo "<br/>";
var_dump($obj03 instanceof Test);
echo "<hr/>";

$obj04=child::newobj();
var_dump($obj04);




