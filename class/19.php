<?php
/**
 * Created by PhpStorm.
 * User: yiyueqinghui
 * Date: 2018/5/18
 * Time: 14:17
 * title:trait  修改方法的访问控制
 */
//修改方法的访问控制
trait sayNice{
    public function says(){
        echo "say nice!";
    }
}
class modifyWay{
    //给方法一个改变了访问控制的别名
    use sayNice{ says as private private_says ;}
}

$obj = new modifyWay();


