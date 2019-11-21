<?php
/**
 * Created by PhpStorm.
 * User: yiyueqinghui
 * Date: 2018/5/15
 * Time: 13:59
 */
//传递数组参数
function Add($inputs){
    echo "$inputs[0]+$inputs[1]=",$inputs[0]+$inputs[1];
}
$arr = array(1,2);
Add($arr);



//默认传递参数，在函数内部修改参数值时，其外部的参数值不变；
//通过引用传递参数（如果希望允许函数修改它的参数值，必须通过引用传递参数）
//如果想要函数的一个参数总是通过    引用传递，可以在函数定义中该参数的前面加上符号 &：
echo "<hr/>";
function joins(&$str){       //参数前面加上&，代表引用传递参数（即函数修改参数值，外面相应的也会被修改）
     $str = $str." and a nice people";
}
$info = "duzuiliunian is a programmer ";
joins($info);
echo $info;

//与引用传参对比
echo "<hr/>";
function join02($str02){       //参数前面加上&，代表引用传递参数（即函数修改参数值，外面相应的也会被修改）
    $str02 = $str02." and a nice people";
    return $str02;
}
$info02 = "duzuiliunian is a programmer ";
$info02 = join02($info02);            //用返回值重新修改参数的值；不建议使用，建议使用引用参数方法，直接修改参数；提高效率
echo $info02;

//默认参数的值 (注意，含默认值的参数可传可不传，但必须放在所有参数的后面)
//默认值必须是常量表达式，必须放在任何非默认参数的右侧。
function tips($tipInfo,$scare="carefully"){
    echo " you should be $tipInfo and $scare<hr/>";
}
$msg = "fangbei";
tips($msg);                //使用默认参数值
tips($msg,null);          //清空默认参数值，传入修改其值为null;\
tips($msg,"小心");         //传入修改默认参数值


//声明参数类型(  类型应该加到参数名前  )
class C{ }
class D extends C{}
class F{}
function f(C $c){               //此处$c参数必须出自 C类 ，否则必报错；
    echo get_class($c)."<br/>";
}
f(new C);
f(new D);
// f(new F);                     //由于传入的参数不是C类，所以会报错

//可变数量的参数列表
//在 PHP 5.6 及以上的版本中，由 ... 语法实现参数列表
function Alladd(...$nums){
    $all = 0;
    foreach($nums as $n){
        $all+=$n;
    }
    echo "$all <hr/>";
    return $all;
}
$all02 = Alladd(10,20,30,40);



?>