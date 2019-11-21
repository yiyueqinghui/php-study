<?php
//array定义的方法一
   $arr = array(
       "foo"=>"hellow",
       "info"=>"world",
       "age"=>27
   );
//array定义的方法二   自 PHP 5.4 起
   $arr02 = [
       "username"=>"yiyueqinghui",
       "age"=>28
   ];
//此外 key 会有如下的强制转换：

$tips=<<<TIPS
包含有合法整型值的字符串会被转换为整型。<br/>
例如键名 "8" 实际会被储存为 8。但是 "08" 则不会强制转换，因为其不是一个合法的十进制数值。<br/>
浮点数也会被转换为整型，意味着其小数部分会被舍去。例如键名 8.7 实际会被储存为 8。<br/>
布尔值也会被转换成整型。即键名 true 实际会被储存为 1 而键名 false 会被储存为 0。<br/>
Null 会被转换为空字符串，即键名 null 实际会被储存为 ""。<br/>
数组和对象不能被用为键名。坚持这么做会导致警告：Illegal offset type。<br/>
如果在数组定义中多个单元都使用了同一个键名，则只使用了最后一个，之前的都被覆盖了。
TIPS;
echo $tips;

//类型强制与覆盖示例
$scroes = [
    8=>888,
    8.88=>8.866666668,
    true=>123,
    null=>0,
    "1"=>11111
];
echo $scroes['8'];
echo "<br/>";
echo $scroes[''];
echo "<br/>";
echo $scroes['1'];


//key 为可选项。如果未指定，PHP 将自动使用之前用过的最大 integer 键名加上 1 作为新的键名
$arr03 = [
    "duzuiliunian",
    "name"=>"yiyueqinghui",
    100=>2000,
    "hellow world"
];
echo "<hr/>";
var_dump($arr03);

//用方括号语法访问数组单元
echo "<hr/>";
echo $arr03["name"];

//用方括号的语法新建／修改
$arrs = [
    "name"=>"cj",
    "age"=>27,
    "year"=>1991,
    "hellow"
];
$arrs[]="world！";   //增加数组元素   key为空时，寻找其前方最大的int,加一做为key;前面没有int时，则key默认为0；
echo "<hr/>";
var_dump($arrs);
echo "<br/>";
$arrs["month"]=11;     //新增数组
$arrs["age"]=2888;     //修改数组相应的key,val;
unset($arrs[0]);      // unset()方法：删除相应的数组对应的元素
var_dump($arrs);
unset($arrs);        // 删除整个数组
echo "<hr/>";

// 创建一个简单的数组
$array = array(1, 2, 3, 4, 5);
print_r($array);
echo "<br/>";

// 现在删除其中的所有元素，但保持数组本身不变:
foreach ($array as $i => $value) {
    unset($array[$i]);
}
print_r($array);
echo "<br/>";

// 添加一个单元（注意新的键名是 5，而不是你可能以为的 0）
$array[] = 6;
print_r($array);
echo "<br/>";

$array = array_values($array);    // 重新索引：
$array[] = 7;
print_r($array);

echo "<hr/>";
//unset() 函数允许删除数组中的某个键。但要注意数组将不会重建索引。
//如果需要删除后重建索引，可以用 array_values() 函数。
$newarr = [
    0=>0,
    1=>1,
    2=>2,
    3=>3
];
unset($newarr["1"]);
var_dump($newarr);
echo "<br/>";
$newarr02 = array_values($newarr);       //array_values($)重建数组索引，返回一个新数组
var_dump($newarr02);
echo "<hr/>";


error_reporting(E_ALL);
ini_set('display_errors', true);
ini_set('html_errors', false);
// Simple array:
$array = array(1, 2);
$count = count($array);                //count()获取数组的长度
echo $count;
for ($i = 0; $i < $count; $i++) {
    echo "\nChecking $i: \n";
    echo "Good: " . $array[$i] . "\n";
    echo "Good: {$array[$i]}\n";
}


//可以用 array_diff() 和数组运算符来比较数组。
$arr001 = [
    "blue",
    "red",
    "yellow"
];
$arr002 = [
    "color"=>"yellow",
    "white",
    "black"
];
$result = array_diff($arr001,$arr002);               //array_diff() 比较两个数组的区别（第一个与第二个的区别，返回第一个数组有，而第二个没有的value组成的新数组）
echo "<hr/>";
var_dump($result);











?>