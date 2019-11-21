<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		<form action="" method="post">
			<label>姓名</label><input type="text" name="username"  />   <br >
			<label>年龄</label><input type="number" name="age"  />   <br >
			<input type="submit" value="提交"  />
		</form>
	</body>
	
	
		
</html>
<?php
  if($_POST){
      $name = $_POST["username"]; 	
      $age = $_POST["age"];
      echo "$name $age 岁了";	
  }
		
?>	