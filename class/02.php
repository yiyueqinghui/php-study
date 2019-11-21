<?php
/**
 * Created by PhpStorm.
 * User: yiyueqinghui
 * Date: 2018/5/16
 * Time: 15:23
 * title:对象的引用和赋值
 */

//dClass在PHP5才开始被流行。而stdClass也是zend的一个保留类。stdClass是PHP的一个基类，
//所有的类几乎都继承这个类，所以任何时候都可以被new，可以让这个变量成为一个object。同时，
//这个基类又有一个特殊的地方，就是没有方法。凡是用new stdClass()的变量，
//都不可能会出现$a->test()这种方式的使用

////深入理解PHP对象赋值
$obj = new StdClass;
$obj->name = 'Pig';
var_dump($obj);                   //object(stdClass)#1 (1) { ["name"]=> string(3) "Pig" }
echo "<br/>";
$copy = $obj;                   // $obj ,$copy都是new StdClass返回的同一个标识符的拷贝,即$copy=new StdClass;
var_dump($copy);                 //object(stdClass)  (1) { ["name"]=>string(3) "Pig" }
echo "<hr/>";


$objRef = &$obj;                 // 此时会将$obj转换成引用，然后赋值给$objRef，因此$obj,$objRef都为引用
var_dump($objRef);                  //object(stdClass)#1 (1) { ["name"]=>string(3) "Pig" }
echo "<hr/>";

$objClone = clone $obj;             //新空间  clone obj 克隆对象，产生一个新的空间，彼此互不影响
$obj->name = 'After Clone';
var_dump($objClone);            //object(stdClass)#1 (1) { ["name"]=>string(3) "Pig" }
echo "<br/>";
var_dump($obj);                    //object(stdClass)#1 (1) { ["name"]=>string(11) "After Clone" }
echo "<hr/>";


//unset是删除引用效果              //unset — 释放给定的变量
//unset() 一个通过引用传递的变量，则只是引用变量被销毁，而被引用的源变量不变；
$nameRef = &$obj->name;            //$obj->name被转换成引用（& string），然后赋给$nameRef
var_dump($obj);                    //object(stdClass)#2 (1) { ["name"]=>&string(11) "After Clone" }
echo "<br/>";
echo "nameRefs:<br/>";
var_dump($nameRef);
echo "<br/>";
unset($nameRef);                  // 删除引用
var_dump($obj);                    //object(stdClass)#1 (1) { ["name"]=>string(11) "After Clone" }
echo "<hr/>";


//null是赋值效果
$nameRef = &$obj->name;            //恢复name的引用
var_dump($obj);                    //object(stdClass)#2 (1) { ["name"]=>&string(11) "After Clone" }
echo "<br/>";
$nameRef = null;
var_dump($obj);                    //object(stdClass)#2 (1) { ["name"]=>&NULL }
echo "<hr/>";


unset($objRef);                    //仅仅删除了引用, 源对象仍然存在
var_dump($obj);                    //object(stdClass)#1 (1) { ["name"]=>&NULL }
echo "<hr/>";

$objRef = &$obj;                 //恢复对象引用
$obj->name = 'Lucy';
$obj = null;                   //赋值$obj为null，$obj只是new StdClass的标识拷贝，不会影响其内容。
//$objRef做为$obj的引用，会同时被赋值null
//等价 $objRef = null;

var_dump($obj);
echo "<br/>";
var_dump($copy);
echo "<br/>";
var_dump($objRef);
echo "<br/>";
var_dump($objClone);
// NULL,
// object(stdClass)#1 (1) { ["name"]=>&string(4) "Lucy" },
// NULL,
// object(stdClass)#1 (1) { ["name"]=>string(3) "Pig" }