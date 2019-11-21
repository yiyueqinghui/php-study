<?php
/**
 * Created by PhpStorm.
 * User: yiyueqinghui
 * Date: 2018/5/16
 * Time: 17:16
 * title:类的属性
 */
$html = "
     <ul>
        <li>
           属性声明是由关键字 public，protected 或者 private 开头，然后跟一个普通的变量声明来组成
        </li>
        <li>
          属性中的变量可以初始化，但是初始化的值必须是常数
        </li>
        <li>
           在类的成员方法里面，可以用 ->（对象运算符）：\$this->property（其中 property 是该属性名）这种方式来访问非静态属性。
        </li>
        <li>
           静态属性则是用 ::（双冒号） self::\$property 来访问
        </li>
        <li>
          当一个方法在类定义内部被调用时，有一个可用的伪变量 \$this。
          \$this 是一个到主叫对象的引用（通常是该方法所从属的对象，
          但如果是从第二个对象静态调用时也可能是另一个对象）。
        </li>
     </ul>
  ";
echo $html;
echo "<hr/>";

class SimpleDemo{
    public $num = 10;
    public $var6 = "myConstant";
    public $str = <<<DOM
         hellow world,how are you?
DOM;
    public $var7 = array(1,3,5);
    public function add(){
        var_dump($this->var7);
        echo "<br/>";
        foreach($this->var7 as $one=>$two){
            echo "$one : $two <br/>";
            $this->var7[$one]=$two*2;
        }
        var_dump($this->var7);
    }

}
$obj=new SimpleDemo();
$obj->add();



