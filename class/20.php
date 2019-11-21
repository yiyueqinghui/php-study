<?php
/**
 * Created by PhpStorm.
 * User: yiyueqinghui
 * Date: 2018/5/18
 * Time: 14:33
 * title:从 trait 来组成 trait
 */
//正如 class 能够使用 trait 一样，其它 trait 也能够使用 trait。
//在 trait 定义时通过使用一个或多个 trait，能够组合其它 trait 中的部分或全部成员。
trait hellow{
    public function say01(){
        echo "hellow  ";
    }
}
trait world{
    public function say02(){
        echo "world";
    }
}
trait hellowWorld{
    use hellow,world;
    public function say_all(){
        echo "how are you? hellow world!";
    }
}
class classA{
    use hellowWorld;
    public $comment_score=60;
}

$obj = new classA();
$obj->say01();
$obj->say02();
$obj->say_all();
echo "<hr/>";
echo $obj->comment_score;
