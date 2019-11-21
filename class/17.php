<?php
/**
 * Created by PhpStorm.
 * User: yiyueqinghui
 * Date: 2018/5/18
 * Time: 11:42
 * title:Trait  实现了一种代码复用的方法，称为 trait
 */
//使用trait来定义复用的方法；
//在类中使用use来调用复用的方法
//优先顺序： 来自当前类的成员  覆盖了   trait 的方法，而 trait 则覆盖了   被继承的方法。


trait all_methods{                         //使用trait来定义复用的方法；
    public function average($arr){
        $total = 0 ;
        foreach($arr as $value){
            $total+=$value;
        }
        $average = $total/count($arr);
        return $average;
    }
    public function grade($score){
        $msg = "";
        if($score>=90){
            $msg="成绩优异";
            return $msg;
        }elseif($score>=60&&$score<90){
            $msg="继续努力";
            return $msg;
        }else{
            $msg="不及格";
            return $msg;
        }
    }
}
class Bs{
    public $score =88;
}

class my_class01 extends Bs{
    use all_methods;                      //在类中使用use来调用复用的方法
}

class my_class02{
    use all_methods;
    public $arr_score = array(10,30,50,90,70);
}

$obj01=new my_class01();
echo $obj01->grade($obj01->score);

echo "<hr/>";

$obj02=new my_class02();
echo $obj02->average($obj02->arr_score);

