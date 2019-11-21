<?php
  //预处理
  header('content-type:text/html; charset=utf-8');	
  //连接mysql
  $dsn = 'mysql:host=localhost;dbname=mytest';
  $username = 'root';
  $password = '';
  $pdo = new PDO($dsn,$username,$password);   
  //设置编译格式
  $pdo->query('set names utf8');
  
  //插入数据
//$name = "yiyueqinghui";
//$age = 28;
//$sex = "man";
//$password = "111111";
//$sql    = "insert into customers (name,age,sex,password) values (?, ? ,? ,?);";
//$preObj = $pdo->prepare($sql);          //预处理
//$res    = $preObj->execute(array($name,$age,$sex,$password));
//var_dump($res);
  
  //删除数据
//$ids = 3;
//$sql = "delete from customers where id= ? ";
//$preObj = $pdo->prepare($sql);         //预处理
//$res = $preObj->execute(array($ids));
//var_dump($res);

  
  //修改数据
//$name = "yiyueqinghui";
//$pass = "0000000000000";
//$sql = "update customers set password= ? where name = ? ";
//$preObj = $pdo->prepare($sql);        //预处理
//$res = $preObj->execute(array($pass,$name));
//var_dump($res);

  //查询数据
  $name ="yiyueqinghui";
  $sql = "select * from customers where name = ? ";
  $preObj = $pdo->prepare($sql);
  $res = $preObj ->execute(array($name));
  var_dump($res);
  /*
 * FETCH_BOTH      是默认的，可省，返回关联和索引。
 * FETCH_ASSOC     参数决定返回的只有关联数组。
 * PDO::FETCH_NUM  返回索引数组
 * PDO::FETCH_OBJ  返回由对象组成的二维数组
 */
 $arr = $preObj->fetchAll(PDO::FETCH_ASSOC);
 var_dump($arr);
  
  
  
  
  
  
  
  
  
  
?>