<?php
/**
 * Created by PhpStorm.
 * User: yiyueqinghui
 * Date: 2018/5/17
 * Time: 10:31
 * title:指定函数参数的类型
 */
//参数不可以指定基本类型（四种标量类型：string、integer、float和boolean）,
//下面一句会出错function f3(string $s){}
// 参数可指定数组类型   指定对象类型
function add_scores(array $arr,First $first){
    $total_scores=0;
    foreach($arr as $name=>$score){
       $info = $first->is_pass($score);
       echo "$name : $info";
       $total_scores+=$score;

    }
    return $total_scores;
}

class First{
    function is_pass($num){
        if($num>60){
            return "pass <br/>";
        }else{
            return "please fightting! <br/>";
        }
    }
}

$score_obj = new First();
$array=[
    "liMing"=>100,
    "xiaoZhang"=>50,
    "liunian"=>120
];
$total=add_scores($array,$score_obj);
echo $total;