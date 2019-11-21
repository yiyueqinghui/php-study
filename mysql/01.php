<?php
header('content-type:text/html; charset=utf-8');	
  //连接mysql
$dsn = 'mysql:host=localhost;dbname=mytest';
$username = 'root';
$password = '';

$pdo = new PDO($dsn, $username, $password);
//通过query函数执行sql命令
$pdo->query('set names utf8');

/**
//方法一     插入变脸时，需要字符串拼接
//插入数据
$name = "user-115";
$age = 18;
$sex = "man";
$pass = "123456";
//$sql = "insert into customers (name,age,sex,password) values ('".$name."','".$age."','".$sex."','".$pass."');";
//$res = $pdo->query($sql);
//var_dump($res);//成功返回对象 失败返回false
//var_dump($pdo->errorInfo());

//删除数据
//$index =4;
//$sql = "delete from customers where id = $index ";
//$res = $pdo->query($sql);
//var_dump($res);//成功返回对象 失败返回false
//echo $res->queryString.'<br />';

//修改数据
//$renames = "lucy";
//$ids = 3;
//$sql = "update customers set name='".$renames."' where id = $ids;";
//$res = $pdo->query($sql);
//var_dump($res);//成功返回对象 失败返回false


//查询
//$sql = "select * from customers order by id desc;";    //按id反向排序
$sql = "select * from customers where id = 3;";
$res = $pdo->query($sql);
var_dump($res);//成功返回对象 失败返回false
$arr = $res->fetchAll();
var_dump($arr[0]["name"]);













//查询
//$stmt = $dbh->prepare('select * from user where name = ?');
//$stmt->execute([$name]);
//$obj = $stmt->fetchAll();
//echo "<pre>";
//var_dump($obj[0]["passward"]);
//echo "</pre>";





//方法三
//$stmt = $dbh->prepare('select * from user where name = :nm');
//$stmt->execute(['nm' => 'name']);
//var_dump($stmt->fetchAll());

?>