<?php
/**
 * Created by PhpStorm.
 * User: yiyueqinghui
 * Date: 2018/5/14
 * Time: 15:24
 * title:可变变量
 */
  $a="hellow";
  $$a="world";         //  $$a相等于$hellow
  echo "$a ${$a}";
  echo "<br/>";
  echo "$a $hellow";
  echo "<br/>";


class foo {
    var $bar = 'I am bar.';
    var $arr = array('I am A.', 'I am B.', 'I am C.');
    var $r   = 'I am r.';
}

$foo = new foo();
$bar = 'bar';
$baz = array('foo', 'bar', 'baz', 'quux');
echo $foo->$bar . "\n";
var_dump($foo);
echo $foo->$baz[1] . "\n";

$start = 'b';
$end   = 'ar';
echo $foo->{$start.$end} . "\n";

$arr = 'arr';
echo $foo->$arr[1] . "\n";
echo $foo->{$arr}[1] . "\n";



?>