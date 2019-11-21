<?php

//PHP 的引用是别名，就是两个不同的变量名字指向相同的内容
//默认情况下对象是通过引用传递的

class A {
    public $foo = 1;
}  

$a = new A;
$b = $a;     // $a ,$b都是同一个标识符的拷贝   ($a) = ($b) = <id>
$b->foo = 2;
echo $a->foo."\n";


$c = new A;
$d = &$c;    // $c ,$d是引用 ($c,$d) = <id>
$d->foo = 4;
echo $c->foo."\n";



$e = new A;
function foo($obj) {
    // ($obj) = ($e) = <id>
    $obj->foo = 6;
}
foo($e);
echo $e->foo."\n";