<?php
/**
 * Created by PhpStorm.
 * User: yiyueqinghui
 * Date: 2018/5/18
 * Time: 17:09
 * title:遍历对象
 */

//简单的对象遍历
class MyClass
{
    public $var1 = 'value 1';
    public $var2 = 'value 2';
    public $var3 = 'value 3';
    const CONST_NUM = 100;

    protected $protected = 'protected var';
    private   $private   = 'private var';

    function iterateVisible() {
        foreach($this as $key => $value) {   //由于在类内部,所以可以遍历所有的属性（除了静态属性，常量）
            print "$key => $value\n";
            print "<br/>";
        }
    }
}

$class = new MyClass();

foreach($class as $key => $value) {       //这个只会遍历public权限的属性
    print "$key => $value   <br/>";
}
echo "<hr/>";


$class->iterateVisible();