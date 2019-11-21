<?php
	
   echo "<h4> \$_POST ,\$_GET   ,\$_REQUEST服务器接受数据</h4>";
  //$_POST   $_GET    接收页面相应的get/post请求
  //$_GET   即把参数存放在url中.
  //$name = $_POST["username"];
  //$age = $_POST["age"];
  
  //$_REQUEST        不论请求类型，全部接收页面请求
if($_REQUEST){
  	$name = $_REQUEST["username"];
    $age = $_REQUEST["age"];
    $email = $_REQUEST["email"];
    $sex = $_REQUEST["gender"];
  
  //验证名字
  if(empty($name)){
  	 echo "姓名不能为空！";
  	 exit;
  }else{
  	 $name = test_input($name);
  	 //preg_match  返回匹配的次数，不匹配则返回0；
	 if(!preg_match("/^[a-zA-Z0-9 ]*$/",$name)){
         echo "名字格式不正确，名字自能是字母数字和空格";
          exit;
	 }
  }
  
  //验证邮箱
  if(empty($email)){
  	echo "邮箱不能为空";
  	exit;
  }else{
  	$email = test_input($email);
  	if(!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)){
  		echo "邮箱格式不合法！";
  	    exit;
  	}
  }
  
  if(empty($sex)){
  	echo "性别必须选一个";
  }
}
  
  function test_input($txt){
  	//trim() 函数移除字符串两侧的空白字符或其他预定义字符。
  	$data = trim($txt);
  	//stripslashes() 函数删除由 addslashes() 函数添加的反斜杠。
    //提示：该函数可用于清理从数据库中或者从 HTML 表单中取回的数据。
  	$data = stripslashes($data);    
  	//htmlspecialchars() 函数把预定义的html元素转化为普通字符，不做hmtl编译处理。
  	$data = htmlspecialchars($data);
  	return $data;
  }
  
  //$_SERVER   是一个包含了诸如头信息(header)、路径(path)、以及脚本位置(script locations)等等信息的数组
  echo "<pre>";
  var_dump($_SERVER);
  echo "</pre>";
  echo $_SERVER['HTTP_HOST']."<br/>";
  echo $_SERVER["HTTP_USER_AGENT"]."<br/>";
  echo $_SERVER["REQUEST_URI"];
  echo "<hr/>";
  
  //$_COOKIE() cookie 是一种服务器留在用户计算机上的小文件。
  //每当同一台计算机通过浏览器请求页面时，这台计算机将会发送 cookie。通过 PHP，您能够创建并取回 cookie 的值。
  //setcookie(name, value, expire, path, domain); 函数用于设置 cookie。  
  // name:cookie的名字                    value:cookie的值       expire:Cookie 过期的时间。这是个 Unix 时间戳
  // path:在服务器端的有效路径。        domain: 该 cookie 有效的域名。
  $expire=time()+60;
  setcookie("chenjun6","123456",$expire);
  echo $_COOKIE['chenjun6']."<br/>";
  print_r($_COOKIE);
  echo "<hr/>";
  
  //$_SESSION 
  //Session保留在服务器端,给每个客户分配一个唯一的数字,作为每个客户的标识,
  // Cookies是保留在客户端的,每次发出页面请求时,都会把里面的数据发送给服务器端.
  //Session适合做客户的身份验证. Cookies适合做保存用户的个人设置,爱好等,
  //session保存在服务器，客户端不知道其中的信息；cookie保存在客户端，服务器能够知道其中的信息。 
  //session中保存的是对象，cookie中保存的是字符串。
  //session是放在服务器上的，过期与否取决于服务期的设定，cookie是存在客户端的，过期与否可以在cookie生成的时候设置进去。
  //cookie数据存放在客户的浏览器上，session数据放在服务器上
  
  session_start();   //启动对话
  $_SESSION["name"] = "yiyueqinghui";   //存储

  $usernames = $_SESSION["name"];       //获取
  
  echo "$usernames";
?>