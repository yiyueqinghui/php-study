<?php
/**
 * Created by PhpStorm.
 * User: yiyueqinghui
 * Date: 2018/5/18
 * Time: 18:03
 * title: final关键字   用在方法上
 */
//PHP 5 新增了一个 final 关键字。如果父类中的方法被声明为 final，则子类无法覆盖该方法。
class parentClass{
    final public function add(){
        echo "total!  <br/>";
    }
    public function reduce(){
        echo "reduce! <br/>";
    }
}

class sonClass extends parentClass{
//   public function add(){            //父类中的方法被声明为 final，则子类无法覆盖该方法
//       echo "total02";
//   }
   public function reduce()             //覆盖了父类中的reduce方法
   {
      echo "覆盖了父类方法！ <br/>";
   }
}

$obj = new sonClass();
$obj->add();
$obj->reduce();



//如果一个类被声明为 final，则不能被继承。
final class baseClass{
    public function base(){
        echo "整个类被final！";
    }
    public $num=888;
}


//class childClass02 extends baseClass{
//    //会报错，由于baseClass被声明了final，则不能被childClass02继承
//}

