<?php
/**
 * Created by PhpStorm.
 * User: yiyueqinghui
 * Date: 2018/5/18
 * Time: 17:16
 * title:魔术方法
 */
 //__construct()， __destruct()，
// __call()， __callStatic()，
// __get()， __set()， __isset()， __unset()，
// __sleep()， __wakeup()，
// __toString()， __invoke()， __set_state()， __clone() 和 __debugInfo()
// 等方法在 PHP 中被称为"魔术方法"

//PHP 将所有以 __（两个下划线）开头的类方法保留为魔术方法。
//所以在定义类方法时，除了上述魔术方法，建议不要以 __ （两个下划线）为前缀。


//__sleep() 方法常用于提交未提交的数据，或类似的清理操作。同时，如果有一些很大的对象，但不需要全部保存，这个功能就很好用。
//__wakeup() 经常用在反序列化操作中，例如重新建立数据库连接，或执行其它初始化操作。

class Connection
{
    protected $link;
    private $server, $username, $password, $db;

    public function __construct($server, $username, $password, $db)
    {
        $this->server = $server;
        $this->username = $username;
        $this->password = $password;
        $this->db = $db;
        $this->connect();
    }

    private function connect()
    {
        $this->link = mysql_connect($this->server, $this->username, $this->password);
        mysql_select_db($this->db, $this->link);
    }

    public function __sleep()
    {
        return array('server', 'username', 'password', 'db');
    }

    public function __wakeup()
    {
        $this->connect();
    }
}

//__toString() 方法用于一个类被当成字符串时应怎样回应
//__invoke()   当尝试以调用函数的方式调用一个对象时，__invoke() 方法会被自动调用。
class CallableClass
{
    function __invoke($x) {
        var_dump($x);
    }
}
$obj = new CallableClass;
$obj(5);     //当尝试以调用函数的方式调用一个对象时，__invoke() 方法会被自动调用
var_dump(is_callable($obj));  //is_callable — 检测参数是否为合法的可调用结构


//__set_state()
// html object __set_state ( array $properties )
// 自 PHP 5.1.0 起当调用 var_export() 导出类时，此静态 方法会被调用。

class A
{
    public $var1;
    public $var2;

    public static function __set_state($an_array) // As of PHP 5.1.0
    {
        $obj = new A;
        $obj->var1 = $an_array['var1'];
        $obj->var2 = $an_array['var2'];
        return $obj;
    }
}

$a = new A;
$a->var1 = 5;
$a->var2 = 'foo';

eval('$b = ' . var_export($a, true) . ';'); // $b = A::__set_state(array(
//    'var1' => 5,
//    'var2' => 'foo',
// ));
var_dump($b);