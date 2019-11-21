<?php
//定义字符串的四种方式
$str = 'hellow world!\n';        //单引号对字符串内的特殊字符不进行解析，直接当作字符串输出
echo $str;

$str02 = "hellow world!\n";     //双引号会对字符串内的一些特殊的字符进行解析 eg：\r \n \t 等
echo "<br/>";
echo $str02;

 //第三种表达字符串的方法是用 heredoc 句法结构：<<<
//在该运算符之后要提供一个标识符，然后换行。接下来是字符串 string 本身，最后要用前面定义的标识符作为结束标志。
//要注意的是结束标识符这行除了可能有一个分号（;）外，绝对不能包含其它字符。这意味着标识符不能缩进，分号的前后也不能有任何空白或制表符。更重要的是结束标识符的前面必须是个被本地操作系统认可的换行，
//比如在 UNIX 和 Mac OS X 系统中是 \n，而结束定界符（可能其后有个分号）之后也必须紧跟一个换行。
class foo{
    public $info = <<<EOD
       hellow world! my girlfriend！
EOD;
    var $tips;
    var $address;
    function foo(){
       $this->tips = <<<MOD
      carefully!
MOD;
       $this->address = array('home01','home02','home03');
    }
}
$foo = new foo();
echo "<br/>";
var_dump($foo);                  //var_dump()可以打印一个对象；echo、print都无法打印对象
echo "<br/>";
echo $foo->info;
echo "<br/>";
echo $foo->tips;
echo "<hr/>";
$all=<<<APC
    hellow world,$foo->tips,
    以上数组：{$foo->address[0]}，{$foo->address[1]}, {$foo->address[2]}.
APC;
echo $all;


//nowdoc  类似于单引号，很适合用于嵌入 PHP 代码或其它大段文本而无需对其中的特殊字符进行转义。
//一个 nowdoc 结构也用和 heredocs 结构一样的标记 <<<， 但是跟在后面的标识符要用单引号括起来，即 <<<'EOT'。

class grade{
    public $foo;
    public $info;
    function add(){
        $this->foo=<<<'TMS'
         <h4>title</h4>
TMS;
        $this->bar=array('1','2','3');
    }
}
$grade = new grade();
echo "<hr/>";            //变量不会解析
echo <<<'GRA'
     hellow,$grade->foo,{$grade->bar[0]}
GRA;






?>