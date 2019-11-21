<?php

//当使用比较运算符（==）比较两个对象变量时，
//比较的原则是：如果两个对象的属性和属性值 都相等，而且两个对象是同一个类的实例，那么这两个对象变量相等。

//而如果使用全等运算符（===），
//即同一个对象

function bool2str($bool)
{
    if ($bool === false) {
        return 'FALSE';
    } else {
        return 'TRUE';
    }
}

function compareObjects(&$o1, &$o2)
{
    echo 'o1 == o2 : ' . bool2str($o1 == $o2) . "<br/>";
    echo 'o1 === o2 : ' . bool2str($o1 === $o2) . "<br/>";
}

class Flag
{
    public $flag;

    function Flag($flag = true) {
        $this->flag = $flag;
    }
}

class OtherFlag
{
    public $flag;

    function OtherFlag($flag = true) {
        $this->flag = $flag;
    }
}

$o = new Flag();
$p = new Flag();
$q = $o;
$r = new OtherFlag();

echo "同一个类的不同的实例对象<br/>";
compareObjects($o, $p);
echo "<hr/>";

echo '同一个对象的复制后成为另一个对象（$q=$o) <br/>';
compareObjects($o, $q);
echo "<hr/>";

echo "不同类实例化的对象";
compareObjects($o, $r);