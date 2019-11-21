<?php

/**
 * Created by PhpStorm.
 * User: yiyueqinghui
 * Date: 2018/5/18
 * Time: 16:00
 * title:重载一    属性重载
 */
//PHP所提供的"重载"（overloading）是指动态地"创建"类属性和方法。

//使用 __get()，__set()，__isset() 和 __unset() 进行属性重载
class PropertyTest
{
    /**  被重载的数据保存在此  */
    private $data = array();


    /**  重载不能被用在已经定义的属性  */
    public $declared = 1;

    /**  只有从类外部访问这个属性时，重载才会发生 */
    private $hidden = 2;

    public function __set($name, $value)
    {
        echo "Setting '$name' to '$value'\n";
        $this->data[$name] = $value;
    }

    public function __get($name)
    {
        echo "Getting '$name'\n";
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }

        $trace = debug_backtrace();
//        trigger_error(
//            'Undefined property via __get(): ' . $name .
//            ' in ' . $trace[0]['file'] .
//            ' on line ' . $trace[0]['line'],
//            E_USER_NOTICE);
        return null;
    }

    /**  PHP 5.1.0之后版本 */
    public function __isset($name)
    {
        echo "Is '$name' set?\n";
        return isset($this->data[$name]);
    }

    /**  PHP 5.1.0之后版本 */
    public function __unset($name)
    {
        echo "Unsetting '$name'\n";
        unset($this->data[$name]);
    }

    /**  非魔术方法  */
    public function getHidden()
    {
        return $this->hidden;
    }
}


echo "<pre>\n";

$obj = new PropertyTest;

echo "01输出内容如下  ";
$obj->a = 1;
echo "<hr/>";

echo "02输出内容如下  ";
echo $obj->a . "\n\n";
echo "<hr/>";

echo "03输出内容如下  ";
var_dump(isset($obj->a));
echo "<hr/>";

echo "04输出内容如下  ";
unset($obj->a);
echo "<hr/>";

echo "05输出内容如下  ";
var_dump(isset($obj->a));
echo "<hr/>";

echo "06输出内容如下  ";
echo $obj->declared . "\n\n";
echo "<hr/>";

echo "06输出内容如下  ";
echo $obj->getHidden() . "\n";
echo "<hr/>";

echo "06输出内容如下  ";
echo $obj->hidden . "\n";        //由于私有private属性无法访问，故这里默认触发的是_get方法。
echo "<hr/>";