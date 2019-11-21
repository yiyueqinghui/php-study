<?php
  header('content-type:text/html; charset=utf-8');
  $dsn = "mysql:host=localhost;dbname=mytest";
  $username = "root";
  $password = "";
  $pdo = new PDO($dsn,$username,$password);
  //设置编译格式
  $pdo->query('set names utf8');
  

//PDO 最常用的方法 lastInsertId()    返回最后一次插入数据时数据在表中的id
  $arr = array("duzuiliunianss003",15,"man","a alonely person");
  $sql = "insert into customers (name,age,sex,password) values (?,?,?,? );";
  $preObj = $pdo -> prepare($sql);
  $res = $preObj ->execute($arr);
  $lastInsertId = $pdo ->lastInsertId();    //pdo方法   $pdo->lastInsertId()
  var_dump($res);
  echo "<br/>最后添加的数据id为  $lastInsertId  <br/>";
  
  
//PDO 最常用的方法 rowCount()    受影响的数据条数 
  $sql = "delete from customers where id in (?,?,?,?) ";
  $preObj = $pdo->prepare($sql);
  $res = $preObj->execute(array(2,4,23,21));
  var_dump($res);
  $rowCount = $preObj->rowCount();
  echo "<br/>删除了 $rowCount 条数据<br/>";
  
  $sql = "update customers set age=? where age<?";
  $preObj = $pdo ->prepare($sql);
  $res = $preObj->execute(array(18,18));
  var_dump($res);
  $rowCount = $preObj->rowCount();       //pdo方法   $preObj->lastInsertId()
  echo "<br/>修改了 $rowCount 条数据<br/>";

  
?>